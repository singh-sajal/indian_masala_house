<?php

namespace App\Http\Controllers\Admin\FoodItem;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\FoodItem\FoodItemRequest;
use App\Http\Controllers\Admin\FoodItem\FoodItemRepository;

class FoodItemController extends Controller
{
    private $repository;

    public function __construct(FoodItemRepository $repository)
    {
        $this->repository = $repository;
    }



    public function index(Request $request)
    {
        return $this->repository->index($request);
    }

    public function create()
    {
        return $this->repository->create();
    }

    public function store(FoodItemRequest $request)
    {
        return $this->repository->store($request);
    }
    public function edit($uuid)
    {
        return $this->repository->edit($uuid);
    }
    public function update(FoodItemRequest $request, $uuid)
    {
        return $this->repository->update($request, $uuid);
    }

    public function destroy($uuid)
    {
        return $this->repository->destroy($uuid);
    }

    public function toggleStatus(Request $request, $uuid)
    {
        return $this->repository->toggleStatus($request, $uuid);
    }
}
