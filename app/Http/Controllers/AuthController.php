<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        // kita ambil data user lalu simpan pada variable $user
        $user = Auth::user();

        // kondiri jika user nya ada
        if ($user){
            // jika user nya memiliki level admin
            if ($user->level_id == 1){
                return redirect()->intended('admin');
            }
            // jika user nya memiliki level manger
            if ($user->level_id == 2){
                return redirect()->intended('manager');
            }
        }
        return view('login');
    }
    // 
    public function proses_login(Request $request)
    {
        // kita buat validasi pada saat tombol login di klik
        // validasi nya username & password wajib di isi
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // kita ambil data username & password lalu simpan pada variable $credentials
        $credentials = $request->only('username', 'password');
        // cek jika data username dan password valid (sesuai) dengan data
        if (Auth::attempt($credentials)) {

            // kalau berhasil simpan data user ya di variable $user
            $user = Auth::user();

            // cek lagi jika level user admin maka arahkan ke halaman admin
            if ($user->level_id == 1){
                //dd($user->level_id);
                return redirect()->intended('admin');
            }
            // jika belum ada role maka ke halaman /
            return redirect()->intended('/');
        }
        // jika ga ada data user yang valid maka kembalikan lagi ke halaman login
        // pastikan kirim pesan error juga kalau login gagal ya
        return redirect('login')
        ->withInput()
        ->withErrors(['lohin_gagal' => 'Pastikan kembali username dan password yang dimasukkan sudah benar']);
    }

    public function register()
    {
        //tampilkan view register
        return view('register');
    }

    //aksi form register
    public function proses_register(Request $request)
    {
        //kita buat validasi nih buat proses register
        //validasi yaitu semua field wajib diisi
        //validasi username itu harus unique atau tidak boleh duplicate username ya
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users',
            'password' => 'required',
            'level_id' => 'required'
        ]);

        //kalau gagal kembali ke halaman resgiter dengan muncul pesan error
        if ($validator->fails()) {
            return redirect('/register')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        //kalau berhasil isi level & hash passwordnya biar secure
        $request['level_id'] = 2;
        $request['password'] = Hash::make($request['password']);

        //masukkan semua data pada request ke table user
        UserModel::create($request->all());

        //kalau berhasil arahkan ke halaman login
        return redirect('login');
    }

    public function logout(Request $request)
    {
        //logout itu harus menhapus sessionnya
        $request->session()->flush();

        //jalankan juga fungsi logout dari auth
        Auth::logout();

        //kembalikan ke halaman login
        return redirect('login');
    }
}

