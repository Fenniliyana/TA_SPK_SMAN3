<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\siswa;
use App\Models\User;
use Mail;
use App\Mail\SendEmail;
use App\Mail\sendForget;

class AuthController extends Controller
{
    function login()
    {
        return view('auth.login');
    }
    function prosesLogin()
    {
        if (Auth::attempt([
            'username' => request('username'),
            'password' => request('password'),
            'level' => '1',
            'status' => '1'
        ])) {
            return redirect('dashboard')->with('welcome', 'informasi login');
        } elseif (Auth::attempt([
            'username' => request('username'),
            'password' => request('password'),
            'level' => '2',
            'status' => '1'

        ])) {
            return redirect('dashboard')->with('welcome', 'informasi login');
        } else {
            return back()->with('danger', 'Login gagal. Silahkan cek username dan password anda!');
        }
    }
    function register()
    {
        return view('auth.register');
    }
    function daftar()
    {
        $cekemail = User::where('email', request('email'))->count();
        if ($cekemail > 0) {
            return back()->with('ada', 'email ada');
        } else {
            $siswa = new siswa;
            $siswa->siswa_nama = request('nama');
            $siswa->siswa_email = request('email');
            $siswa->siswa_kelas = request('kelas');
            $siswa->siswa_alamat = request('alamat');
            $siswa->siswa_jk = request('jk');
            $siswa->siswa_tmp_lahir = request('tmp_lahir');
            $siswa->siswa_tgl_lahir = request('tgl_lahir');
            $siswa->siswa_nis = request('nis');
            $siswa->save();

            $user = new User;
            $user->nama = request('nama');
            $user->nip = request('nis');
            $user->email = request('email');
            $user->jabatan = request('kelas');
            $user->level = '2';
            $user->id_siswa = $siswa->id;
            $user->username = request('username');
            $user->password = bcrypt(request('password'));
            $user->status = '0';
            $user->save();

            $id = User::find($user->id)->id;

            $data = [
                'title' => 'Hallo ' . request('nama'),
                'body' => 'ini verifikasi data anda melalui tombol berikut',
                'akun' => $id,
                'status' => '1'
            ];
            Mail::to(request('email'))->send(new SendEmail($data));

            return redirect('/')->with('regis', 'regis');
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Anda berhasil logout');
    }
    function verifikasi($id, $status)
    {
        $user = User::find($id);
        $user->status = $status;
        $user->save();
        return redirect('/');
    }
    function lupaPassword(){
        return view('auth.forget');
    }

    function sendForgot(){
        $user = User::where('email',request('email'))->first();
        $nama = $user->nama;
        $akunid = $user->id;
        
        $data = [
            'title' => 'Hallo ' .$nama,
            'body' => 'Ubah Password Anda melalui Tombol Berikut',
            'id' => $akunid,
        ];
        Mail::to(request('email'))->send(new sendForget($data));
        return redirect('/')->with('cekEmail','Buka Email Untuk Ubah password');
    }
    function CekPassword($id){
        $dd = $data['user'] = User::find($id);
        return view('auth.password',$data);
    }
    function NewPassword(){
        $user = User::find(request('id'));
        $user->password = bcrypt(request('password'));
        $user->save();
        return redirect('login');
    }
}
