<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Dashboard\AdminDashboardRepository;

class AdminDashboardController extends Controller
{
    private $repository;

    public function __construct(AdminDashboardRepository $repository)
    {
        $this->repository = $repository;
    }


    public function dashboard(Request $request)
    {
        return $this->repository->dashboard($request);
    }
}

