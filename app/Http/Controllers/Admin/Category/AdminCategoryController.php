<?php

namespace App\Http\Controllers\Admin\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Category\AdminCategoryRequest;
use App\Http\Controllers\Admin\Category\AdminCategoryRepository;

class AdminCategoryController extends Controller
{
    private $repository;

    public function __construct(AdminCategoryRepository $repository)
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

    public function store(AdminCategoryRequest $request)
    {
        return $this->repository->store($request);
    }
    public function edit($uuid)
    {
        return $this->repository->edit($uuid);
    }
    public function update(AdminCategoryRequest $request, $uuid)
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
