<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BanksoController extends Controller
{
    public function bakso(){
        $col_1 = ["UKMPPD 2013"," 2013", "150", "Kemendikbud"];
        $col_2 = ["UKMPPD 2014", "2014", "150", "Kemendikbud"];
        $col_3 = ["UKMPPD 2015", "2015", "150", "Kemendikbud"];
        $col_4 = ["UKMPPD 2016", "2016", "150", "Kemendikbud"];
        $col_5 = ["UKMPPD 2017", "2017", "150", "Kemendikbud"];
        $col_6 = ["UKMPPD 2018", "2018", "150", "Kemendikbud"];
        $col_7 = ["UKMPPD 2019", "2019", "150", "Kemendikbud"];
        $col_8 = ["UKMPPD 2020", "2020", "150", "Kemendikbud"];
        return view('bank_soal', ['col_1' => $col_1, 'col_2' => $col_2, 'col_3' => $col_3, 'col_4' => $col_4, 'col_5' => $col_5, 'col_6' => $col_6, 'col_7' => $col_7, 'col_8' => $col_8]);
    }
}
