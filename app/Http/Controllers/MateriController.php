<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MateriController extends Controller
{
    public function materi(){
        $materi = DB::table('materi')->get();
        return view('materi', ['materi' => $materi]);
    }

    public function edit($id){
        $materi = DB::table('materi')->where('id_materi',$id)->get();
        return view('edit',['materi' => $materi]);
    }

    public function update(Request $request){
        
        DB::table('materi')->where('id_materi',$request->id)->update([
            'materi_penyakit' => $request->penyakit,
            'materi_gejala' => $request->gejala,
            'materi_terapi' => $request->terapi
        ]);
        return redirect('/materi');
    }

    public function delete($id){
        DB::table('materi')->where('id_materi', $id)->delete();
        return redirect('materi');
    }   

    public function tambah(){
        return view('tambah');
    }

    public function proses(Request $request){
        DB::table('materi')->insert([
            'materi_penyakit' => $request->penyakit,
            'materi_gejala' => $request->gejala,
            'materi_terapi' => $request->terapi
        ]);
        return redirect('materi')->with('alert', 'Data berhasil ditambahkan');
    }
}