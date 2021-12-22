<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function baksoal(){
        $bakso = DB::table('bank_soal')->get();
        return view('user_bs', ['bakso' => $bakso]);
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
        DB::table('users')->insert([
            'name' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->hp,
            'universitas' => $request->univ,
            'password' => Hash::make($request->pw)
        ]);

        return redirect('pembayaran');
    }

    public function pengguna(){
        $users = DB::table('users')->get();
        return view('manajemen_user', ['users' => $users]);
    }

    public function edit($id){
        $users = DB::table('users')->where('id',$id)->get();
        return view('edit_manajemen',['users' => $users]);
    }

    public function update(Request $request){
        
        DB::table('users')->where('id',$request->id)->update([
            'name' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'universitas' => $request->universitas,
            'password' => $request->pw
        ]);
        return redirect('manajemen_user');
    }

    public function delete($id){
        DB::table('users')->where('id', $id)->delete();
        return redirect('manajemen_user');
    }
    
    public function editUser($id){
        $users = DB::table('users')->where('id', $id)->get();
        return view('useredit', ['users' => $users]);
    }

    public function storeProfil(Request $request){
        DB::table('users')->where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'universitas' => $request->universitas
        ]);
        $pengguna = DB::table('users')->where('email', $request->input('email'))->get();
        $data = array(
            'id' => $pengguna[0]->id,
            'email' => $pengguna[0]->email,
            'name' => $pengguna[0]->name,
            'no_hp' => $pengguna[0]->no_hp,
            'universitas' => $pengguna[0]->universitas
        );
        $request->session()->put($data);
        return redirect('user_profile');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            $pengguna = DB::table('users')->where('email', $request->input('email'))->get();
            $data = array(
                'id' => $pengguna[0]->id,
                'email' => $pengguna[0]->email,
                'name' => $pengguna[0]->name,
                'no_hp' => $pengguna[0]->no_hp,
                'universitas' => $pengguna[0]->universitas
            );
            // dd($data);
            $request->session()->put($data);
            // dd($request->session('email'));
            return redirect('home/user')->with('pengguna', $data);
        }
        return back()->withInput()->withErrors([
            'email' => 'email atau password salah',
            'password' => 'email atau password salah'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }

    public function profEdit(Request $request)
    {
        
    }

}
