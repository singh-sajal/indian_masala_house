<?php

namespace App\Http\Controllers\Admin\Category;

use Carbon\Carbon;
use App\Models\Admin;
use App\Models\Author;
use App\Models\Category;
use App\Models\Application;

class AdminCategoryRepository
{
    protected $basePath = 'uploads/categories/images/';

    private function getCategory($uuid)
    {
        $category = Category::where('uuid', $uuid)->first();
        return $category;
    }

    public function index($request)
    {
        $perPage = $request->perPage ?? 15;
        $records = Category::where('name', '!=', '1');
        // return $records;

        $this->search($request, $records);
        $this->sort($request, $records);
        $records = $records->paginate($perPage);
        // return $records;
        if ($request->ajax()) {

            try {
                $datatable = view('admin.cms.category.datatable', compact('records'))->render();
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
        return view('admin.cms.category.index');
    }

    public function create()
    {
        return view('admin.cms.category.create');
    }

    public function store($request)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'subtitle' => $request->subtitle,
        ];

        if ($request->has('is_featured')) {
            $data['is_featured'] = 1;
        } else {
            $data['is_featured'] = 0;
        }

        if ($request->hasFile('avatar')) {
            $data['avatar'] = uploadFile($request->file('avatar'), $this->basePath);
        }

        // return $data;

        if (Category::create($data)) {
            return successResponse("Category Created Successfully", route('admin.category.index'));
        }
        return errorResponse();
    }

    public function edit($uuid)
    {
        $record = $this->getCategory($uuid);


        return view('admin.cms.category.edit', compact('record'));
    }

    public function update($request, $uuid)
    {
        $record = $this->getCategory($uuid);

        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'subtitle' => $request->subtitle,

        ];

        if ($request->has('is_featured')) {
            $data['is_featured'] = 1;
        } else {
            $data['is_featured'] = 0;
        }

        if ($request->hasFile('avatar')) {
            $data['avatar'] = replaceFile($request->file('avatar'), $this->basePath, $record->avatar);
        }


        if ($record->update($data)) {
            return successResponse("Category Created Successfully", route('admin.category.index'));
        }

        return errorResponse();
    }

    public function destroy($uuid)
    {
        try {
            $record = $this->getCategory($uuid);

            // Optionally remove avatar from storage
            if ($record->avatar && file_exists(public_path($record->avatar))) {
                unlink(public_path($record->avatar));
            }

            $record->delete();

            return successResponse('Staff deleted successfully');
        } catch (\Throwable $th) {
            return throwException($th);
        }
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
        $record = $this->getCategory($uuid);
        if (updateStatus($record, $request->status, $request->column)) {
            return successResponse('Updated Successfully');
        } else {
            return errorResponse('Something went wrong');
        }
    }
}
