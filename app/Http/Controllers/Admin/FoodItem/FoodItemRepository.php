<?php

namespace App\Http\Controllers\Admin\FoodItem;

use App\Models\Category;
use Carbon\Carbon;
use App\Models\Fooditems;
use App\Models\Menu;

class FoodItemRepository
{
    protected $basePath = 'uploads/fooditems/images/';

    private function getFooditem($uuid)
    {
        $record = Menu::where('uuid', $uuid)->first();
        return $record;
    }

    public function index($request)
    {
        $perPage = $request->perPage ?? 15;
        $records = Menu::with('category');

        $this->search($request, $records);
        $this->sort($request, $records);
        $records = $records->paginate($perPage);
        if ($request->ajax()) {

            try {
                $datatable = view('admin.cms.fooditems.datatable', compact('records'))->render();
                return response()->json([
                    'status' => '200',
                    'msg' => 'Data loaded',
                    'data' => $datatable,
                    'paginationInfo' => getPaginationInfo($records)
                ], 200);
            } catch (\Throwable $th) {
                return throwException($th);
            }
        }
        return view('admin.cms.fooditems.index');
    }

    public function create()
    {
        $categories = Category::select('id', 'name')->orderBy('name')->get();
        $record = null;

        return view('admin.cms.fooditems.create', compact('categories', 'record'));
    }

    public function store($request)
    {
        $data = [
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'full_price' => $request->full_price,
            'half_price' => $request->half_price ?? null,
            'is_featured' => $request->has('is_featured') ? 1 : 0,
            'is_starter' => $request->has('is_starter') ? 1 : 0,
            'status' => $request->has('status') ? 1 : 0,
            'allergens' => $request->allergens,

        ];

        if ($request->hasFile('avatar')) {
            $data['avatar'] = uploadFile($request->file('avatar'), $this->basePath);
        }

        if (Menu::create($data)) {
            return successResponse("Food item created successfully!", route('admin.fooditem.index'));
        }

        return errorResponse();
    }



    public function edit($uuid)
    {
        // Fetch the record by UUID (single item)
        $record = Menu::where('uuid', $uuid)->with('category')->firstOrFail();

        // Fetch categories for the dropdown
        $categories = Category::select('id', 'name')->orderBy('name')->get();

        // Pass data to the Blade view
        return view('admin.cms.fooditems.edit', compact('record', 'categories'));
    }



    public function update($request, $uuid)
    {
        // Get the existing food item
        $record = $this->getFooditem($uuid);

        // Prepare data for update
        $data = [
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'full_price' => $request->full_price,
            'half_price' => $request->half_price ?? null,
            'is_featured' => $request->has('is_featured') ? 1 : 0,
            'is_starter' => $request->has('is_starter') ? 1 : 0,
            'status' => $request->has('status') ? 1 : 0,
            'allergens' => $request->allergens,
        ];

        // Handle image replacement
        if ($request->hasFile('avatar')) {
            $data['avatar'] = replaceFile($request->file('avatar'), $this->basePath, $record->avatar);
        }

        // return $request;

        // Perform the update
        if ($record->update($data)) {
            return successResponse("Food item updated successfully", route('admin.fooditem.index'));
        }

        return errorResponse("Failed to update the food item.");
    }


    public function destroy($uuid)
    {
        // Fetch the record
        $record = $this->getFooditem($uuid);

        // Optionally delete the avatar file if it exists
        if ($record->avatar) {
            deleteFile($record->avatar);
        }

        // Delete the record
        if ($record->delete()) {
            return successResponse("Food item deleted successfully.");
        }

        return errorResponse("Failed to delete the food item.");
    }


    private function search($request, $query)
    {
        // if (!empty($request->search)) {
        //     $statusMap = [
        //         'active' => true,
        //         'inactive' => false,
        //     ];
        //     $statusValue = $statusMap[strtolower($request->search)] ?? null;
        //     $query->where(function ($subQuery) use ($request, $statusValue) {
        //         $subQuery->where('title', 'LIKE', "%{$request->search}%")
        //             ->orWhere('type', 'LIKE', "%{$request->search}%")
        //             ->orWhereHas('service', function ($q) use ($request) {
        //                 $q->where('name', 'LIKE', "%{$request->search}%");
        //             })
        //             ->orWhereHas('creator', function ($q) use ($request) {
        //                 $q->where('name', 'LIKE', "%{$request->search}%");
        //             })
        //             ->orWhere('created_at', 'LIKE', "%{$request->search}%");

        //         if (!is_null($statusValue)) {
        //             $subQuery->orWhere('status', $statusValue);
        //         }
        //     });
        // }

        if ($request->filled('search')) {
            $searchTerm = $request->search;

            $query->where(function ($q) use ($searchTerm) {
                $q->where('name', 'like', "%{$searchTerm}%")
                    ->orWhere('username', 'like', "%{$searchTerm}%")
                    ->orWhere('email', 'like', "%{$searchTerm}%")
                    ->orWhere('phone', 'like', "%{$searchTerm}%");
            });
        }
    }



    private function sort($request, $query, $validColumns = [])
    {

        // if (!empty($request->sortColumn) && in_array($request->sortColumn, $validColumns)) {
        if (!empty($request->sortColumn)) {
            $query->orderBy($request->sortColumn, "{$request->sortDirection}");
        } else {
            $query->latest('id');
        }
    }

    public function toggleStatus($request, $uuid)
    {
        $record = $this->getFooditem($uuid);
        if (updateStatus($record, $request->status, $request->column)) {
            return successResponse(' Updated Successfully');
        } else {
            return errorResponse('Something went wrong');
        }
    }
}
