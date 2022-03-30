<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginusercontroller extends Controller
{
    public function loginuser()
    {
        return view('User.Authentifikasi.login');
}
}