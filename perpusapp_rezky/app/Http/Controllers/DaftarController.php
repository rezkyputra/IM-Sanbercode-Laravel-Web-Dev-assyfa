<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function pendaftar()
    {
        return view('page.daftar');
    }

    public function home(Request $request)
    {
        $fullname = $request->input('fullname');
        $alamat = $request->input('address');

        return view('page.home', ["fullname" => $fullname, "alamat"=>$alamat]);
    }
}
