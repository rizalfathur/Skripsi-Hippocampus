<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function proses(Request $request){
        $nama = $request->input('uname');
        return view('home', ['nama' => $nama]);
    }
}
