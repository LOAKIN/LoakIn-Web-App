<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardDriverController extends Controller
{
    public function index()
    {
        return view('Driver.Page.Dashboard.Dashboard');
    }
}
