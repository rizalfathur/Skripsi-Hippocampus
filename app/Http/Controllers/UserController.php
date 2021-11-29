<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function baksoal(){
        $col_1 = ["UKMPPD 2013"," 2013", "150", "Kemendikbud"];
        $col_2 = ["UKMPPD 2014", "2014", "150", "Kemendikbud"];
        $col_3 = ["UKMPPD 2015", "2015", "150", "Kemendikbud"];
        $col_4 = ["UKMPPD 2016", "2016", "150", "Kemendikbud"];
        $col_5 = ["UKMPPD 2017", "2017", "150", "Kemendikbud"];
        $col_6 = ["UKMPPD 2018", "2018", "150", "Kemendikbud"];
        $col_7 = ["UKMPPD 2019", "2019", "150", "Kemendikbud"];
        $col_8 = ["UKMPPD 2020", "2020", "150", "Kemendikbud"];
        $pengguna = DB::table('pengguna')->where('id_pengguna', 3)->get();
        return view('user_bs', ['col_1' => $col_1, 'col_2' => $col_2, 'col_3' => $col_3, 'col_4' => $col_4, 'col_5' => $col_5, 'col_6' => $col_6, 'col_7' => $col_7, 'col_8' => $col_8, 'pengguna'=>$pengguna]);
    }

    public function materi(){
        $materi = DB::table('materi')->get();
        $pengguna = DB::table('pengguna')->where('id_pengguna', 3)->get();
        return view('user_materi', ['materi' => $materi, 'pengguna'=>$pengguna]);
    }

    public function pembahasan(){
            $pemb_vid = DB::table('pembahasan')->get();
            $pengguna = DB::table('pengguna')->where('id_pengguna', 3)->get();
            return view('user_pembahasan', ['pemb_vid' => $pemb_vid, 'pengguna'=> $pengguna]);
    }

    public function hasilto(){
        $pengguna = DB::table('pengguna')->where('id_pengguna', 3)->get();
        return view('user_hasilto', ['pengguna'=>$pengguna]);
    }

    public function profile(){
        $pengguna = DB::table('pengguna')->where('id_pengguna', 3)->get();
        return view('user_profile', ['pengguna' => $pengguna]);
    }

    public function to(){
        return view('user_to');
    }

    public function topage(){
        $pengguna = DB::table('pengguna')->where('id_pengguna', 3)->get();
        return view('to_page', ['pengguna'=>$pengguna]);
    }

    public function register(){
        return view('register');
    }

    public function store(Request $request){
        DB::table('pengguna')->insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->hp,
            'universitas' => $request->univ,
            'password' => Hash::make($request->pw)
        ]);

        return redirect('pembayaran');
    }

    public function pengguna(){
        $pengguna = DB::table('pengguna')->get();
        return view('manajemen_user', ['pengguna' => $pengguna]);
    }

    public function edit($id){
        $pengguna = DB::table('pengguna')->where('id_pengguna',$id)->get();
        return view('edit_manajemen',['pengguna' => $pengguna]);
    }

    public function update(Request $request){
        
        DB::table('pengguna')->where('id_pengguna',$request->id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'universitas' => $request->universitas,
            'password' => $request->pw
        ]);
        return redirect('manajemen_user');
    }

    public function delete($id){
        DB::table('pengguna')->where('id_pengguna', $id)->delete();
        return redirect('manajemen_user');
    }
    
    public function editUser($id){
        $pengguna = DB::table('pengguna')->where('id_pengguna', $id)->get();
        return view('useredit', ['pengguna' => $pengguna]);
    }

    public function storeProfil(Request $request){
        DB::table('pengguna')->where('id_pengguna', $request->id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'universitas' => $request->univ
        ]);

        return redirect('user_profile');
    }

}
