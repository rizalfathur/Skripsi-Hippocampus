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

    public function addPembV(){
        return view('add_pemb');
    }

    public function addPemb(Request $request){
        $pemb_vid = DB::table('pembahasan')->insert([
            'judul_pemb' => $request->judul,
            'link_pemb' => $request->link
        ]);
        return redirect('pembahasan');
    }

    public function hapusPemb($id){
            DB::table('pembahasan')->where('id_pemb', $id)->delete();
            return redirect('pembahasan');
    }
}
