<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Faktur;
use App\Models\Status;
use App\Models\Kabupaten;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class FakturController extends Controller
{
    public function index(){
        $faktur_hariini = Faktur::whereMonth('created_at', Carbon::now()->month)->where('status_id', 3)->count();
        // $carbon = Carbon::now();
        // ddd($carbon);
        $faktur_semua = Faktur::count();
        $faktur_terverifikasi = Faktur::where('status_id',3)->count();
        return view('biro.dashboard.index', compact('faktur_hariini','faktur_semua', 'faktur_terverifikasi'));
    }

    public function index_dealer(){
        $faktur_hariini = Faktur::where('created_at', Carbon::now())->count();
        // $carbon = Carbon::now();
        // ddd($carbon);
        $faktur_semua = Faktur::count();
        $faktur_terverifikasi = Faktur::where('status_id',3)->count();
        return view('dealer.dashboard.index', compact('faktur_hariini','faktur_semua', 'faktur_terverifikasi'));
    }

    public function data_faktur(){
        $dataFaktur = Faktur::get();
        $status = Status::get();
        $kabupaten = Kabupaten::where('aktif', 1)->get();
        return view('biro.data-faktur.index', compact('dataFaktur', 'status', 'kabupaten'));
    }

    public function data(Request $request){

        $orderBy = 'faktur.id';
        switch($request->input('order.0.column')){
            case "0":
                $orderBy = 'faktur.nama_nasabah';
                break;
            case "1":
                $orderBy = 'faktur.kabupaten_id';
                break;
            case "2":
                $orderBy = Carbon::parse('faktur.created_at');
                break;
            case "3":
                $orderBy = 'faktur.status_id';
                break;
        }
        $data = Faktur::select([
            'faktur.*'
        ]);

        if($request->input('search.value')!=null){
            $data = $data->where(function($q)use($request){
                $q->whereRaw('LOWER(nomor_faktur) like ?',['%'.strtolower($request->input('search.value')).'%'])
                ->orWhereRaw('LOWER(nama_nasabah) like ?',['%'.strtolower($request->input('search.value')).'%'])
                ->orWhereRaw('LOWER(created_at) like ?',['%'.strtolower($request->input('search.value')).'%']);
            });
        }

        if($request->input('data_status')!=null){
            $data = $data->where('status_id', $request->data_status);
        }

        if($request->input('data_kabupaten_id')!=null){
            $data = $data->where('kabupaten_id', $request->data_kabupaten_id);
        }

        if($request->input('data_kabupaten')!=null){
            $data = $data->where('kabupaten_id', $request->data_kabupaten);
        }

        if($request->input('data_status_id')!=null){
            $data = $data->where('status_id', $request->data_status_id);
        }

        $rekamFilter = $data->get()->count();
        if($request->input('length')!=-1) 
            $data = $data->skip($request->input('start'))->take($request->input('length'));
        $data = $data->with('kabupatenRelasi')->with('statusRelasi')->with('userRelasi')->orderBy('id', 'desc')->get();
        $rekamTotal = $data->count();
        return response()->json([
            'draw'=>$request->input('draw'),
            'recordsTotal'=>$rekamTotal,
            'recordsFiltered'=>$rekamFilter,
            'data'=>$data
        ]);
    }

    public function kirim_ke_dealer(Request $request){
        Faktur::where('id', $request->input('id'))->update([
            'updated_at' => Carbon::now(),
            'status_id' => 3
        ]);
        
        return response()->json(true);
    }

    public function verifikasi_samsat(Request $request){
        Faktur::where('id', $request->input('id'))->update([
            'updated_at' => Carbon::now(),
            'status_id' => 2
        ]);
        return response()->json(true);
    }

    public function data_faktur_dealer(){
        $dataFaktur = Faktur::get();
        $status = Status::get();
        $kabupaten = Kabupaten::where('aktif', 1)->get();
        return view('dealer.data-faktur.index', compact('dataFaktur', 'status', 'kabupaten'));
    }

    public function tambah_data_faktur(Request $request){
        $tambah_faktur = new Faktur();
        $tambah_faktur->nomor_faktur = $request->nomor_faktur;
        $tambah_faktur->user_id = Auth::user()->id;
        $tambah_faktur->nama_nasabah = $request->nama_nasabah;
        $tambah_faktur->nomor_rangka = $request->nomor_rangka;
        $tambah_faktur->nomor_mesin = $request->nomor_mesin;
        $tambah_faktur->kabupaten_id = $request->kabupaten_id;
        $tambah_faktur->created_at = Carbon::now();
        $tambah_faktur->status_id = 1;
        $tambah_faktur->save();
        Alert::success('Sukses','Berhasil Menambah Data Faktur');
        return back();
    }
}