<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

use App\Models\Driver;
use Session;

class ProfileDriverController extends Controller
{
    public function index()
    {   
        if(Session::has('driver')){
            $account = Driver::where('id', session()->get('driver')->id)->firstOrFail();
            
            return view('Driver.Page.Profile.Profile', compact('account'));
        }
        else{
            return redirect()->route('logindriver');    
        }
    }
}
