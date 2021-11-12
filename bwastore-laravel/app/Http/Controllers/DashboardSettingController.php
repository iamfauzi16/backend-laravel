<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardSettingController extends Controller
{
    public function index()
    {
        return view('pages.dashboard-account');
    }

    public function dashboardSetting()
    {
        return view('pages.dashboard-settings');
    }
}
