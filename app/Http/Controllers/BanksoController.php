<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BanksoController extends Controller
{
    public function bakso(){
        $bakso = DB::table('bank_soal')->get();
        return view('bank_soal', ['bakso' => $bakso]);
    }
}
