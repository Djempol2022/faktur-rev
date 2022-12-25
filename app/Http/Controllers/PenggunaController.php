<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kabupaten;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class PenggunaController extends Controller
{
    
    public function data_pengguna(){
        $kabupaten = Kabupaten::get();
        $data_pengguna = User::orderBy('id', 'desc')->get();
        return view('pengguna.index', compact('data_pengguna', 'kabupaten'));
    }

    public function tambah_pengguna(Request $request){
        $tambah_pengguna = new User();
        $tambah_pengguna->name = $request->name;
        $tambah_pengguna->email = $request->email;
        $tambah_pengguna->kabupaten_id = $request->kabupaten_id;
        $tambah_pengguna->password =Hash::make(12345678);
        $tambah_pengguna->save();
        Alert::success('Sukses','Berhasil Menambah Pengguna');
        return redirect()->back();
    }

    public function edit_pengguna(Request $request, $id){
        $edit_pengguna = User::find($id);
        $edit_pengguna->name = $request->name;
        $edit_pengguna->email = $request->email;
        $edit_pengguna->kabupaten_id = $request->kabupaten_id;
        $edit_pengguna->password =Hash::make(12345678);
        $edit_pengguna->save();
        Alert::success('Sukses','Berhasil Menubah Data Pengguna');
        return redirect()->back();
    }

    public function hapus_pengguna($id){
        User::find($id)->delete();
        Alert::success('Sukses','Berhasil Menghapus Data Pengguna');
        return redirect()->back();
    }

    public function pengaturan(){
        return view('pengaturan.index');
    }

    public function edit_profil(){
        $data_profil = User::where('id', Auth::user()->id)->first();
        return view('pengaturan.edit_profil', compact('data_profil'));
    }

    public function profil_update(Request $request){
        $profil_updated = User::find(Auth::user()->id);
        $profil_updated->name = $request->name;
        $profil_updated->email = $request->email;
        if($request->hasFile('foto')){
            $path = 'storage/' . $profil_updated->foto;
            if (File::exists($path)) {
                File::delete($path);
            }
            $image  = $request->file('foto');
            $store  = $image->store('foto', 'public');
            $profil_updated->foto = $store;
        }
        $profil_updated->save();
        Alert::success('Sukses','Berhasil Mengubah Data Profil');
        return redirect()->back();
    }

    public function edit_password(){
        $data_password = User::where('id', Auth::user()->id)->first();
        return view('pengaturan.edit_password', compact('data_password'));
    }

    public function password_update(Request $request){
        $validator = Validator::make($request->all(), [
            'passwordlama' =>[
                'required', function($attribute, $value, $fail){
                    if(!Hash::check($value, Auth::user()->password)){
                        return $fail(__('Password anda tidak cocok'));
                    }
                },
                'min:3','max:30',
            ],
            'password'=>'required|min:8|max:30',
            'konfirmasipasswordbaru'=>'required|same:password'
            ],
            [
                'passwordlama.required'=> 'Wajib diisi', // custom message
                'passwordlama.min'=> 'Minimal 8 Karakter', // custom message
                'passwordlama.max'=> 'Maksimal 30 Karakter', // custom message
                
                'password.required'=> 'Wajib diisi', // custom message
                'password.min'=> 'Minimal 8 Karakter', // custom message
                'password.max'=> 'Maksimal 30 Karakter', // custom message

                'konfirmasipasswordbaru.required'=> 'Wajib diisi', // custom message
                'konfirmasipasswordbaru.same'=> 'Konfirmasi password tidak tepat' // custom message

            ]);

        if(!$validator->passes()){
            return response()->json([
                'status'=>0,
                'error'=>$validator->errors()->toArray()
            ]);
        }else{
            $updated = User::find(Auth::user()->id)
                ->update([
                    'password'=>Hash::make($request->password)
            ]);
            
            if(!$updated){
                return response()->json([
                    'status'=>0,
                    'msg'=>'Terjadi kesalahan, Gagal mengupdate password'
                ]);
            }else{
                return response()->json([
                    'status'=>1,
                    'msg'=>'Berhasil mengupdate password'
                ]);
            }
        }
    }

}
