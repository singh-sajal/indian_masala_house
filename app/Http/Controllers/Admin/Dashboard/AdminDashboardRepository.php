<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Models\Admin;
use Carbon\Carbon;
use App\Models\Application;
use App\Models\Author;

class AdminDashboardRepository
{

    public function dashboard($request)
    {
        return view('admin.cms.dashboard');
    }



}
