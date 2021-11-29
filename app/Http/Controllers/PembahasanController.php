<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembahasanController extends Controller
{
    public function index(){
        $pemb_vid = DB::table('pembahasan')->get();
        return view('pembahasan', ['pemb_vid' => $pemb_vid]);
    }
}
