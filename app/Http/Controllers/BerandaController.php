<?php

namespace App\Http\Controllers;

use App\Models\Faktur;
use App\Models\Kabupaten;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BerandaController extends Controller
{
    public function beranda(){
        return view('FE_All.beranda');
    }

    public function total_perbulan(Request $request){

        if($request->ajax()){
            $data = $request->all();
            $fakturTerverifikasi = Faktur::whereMonth('created_at', $data['bulan_value'])->where('status_id', 2)->count();
            $dataFakturMasuk = Faktur::whereMonth('created_at', $data['bulan_value'])->where('status_id', 3)->count();
            return response()->json([
                'data1'=>$fakturTerverifikasi,
                'data2'=>$dataFakturMasuk
            ]);
        }
    }

    public function data_kabupaten(){
        $semua_kabupaten = Kabupaten::get();
        $data_kabupaten = Kabupaten::where('aktif', 1)->get();
        // dd($data_kabupaten);
        return view('pengaturan.kelola_kabupaten', compact('data_kabupaten', 'semua_kabupaten'));
    }

    public function aktifkan_kabupaten(Request $request){
        Kabupaten::where('id', $request->kabupaten_id)->update([
            'aktif'=>1
        ]);
        Alert::success('Sukses','Berhasil Menambah Kabupaten');
        return back();
    }

    public function nonaktifkan_kabupaten($id){
        Kabupaten::where('id', $id)->update([
            'aktif'=>0
        ]);
        Alert::success('Sukses','Berhasil Menghapus Kabupaten');
        return back();
    }
}
