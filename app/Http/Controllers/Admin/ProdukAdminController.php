<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Produk;

use Session;

class ProdukAdminController extends Controller
{
    public function index()
    {
        if(Session::has('admin')){
            $produk = Produk::paginate(5);

            return view('Admin.Page.DataProduk.Produk',  compact('produk'));
        }
        else{
            return redirect()->route('loginadmin');
        }
    }
}
