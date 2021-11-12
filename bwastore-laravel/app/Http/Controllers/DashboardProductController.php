<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardProductController extends Controller
{
      /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() 
    {
        return view('pages.dashboard-product');
    }


    public function dashboardDetail()
    {
        return view('pages.dashboard-product-details');
    }

    
    public function dashboardCreate()
    {
        return view('pages.dashboard-create');
    }
}
