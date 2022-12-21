<?php

namespace App\Http\Controllers;

use App\Models\Faktur;
use App\Models\Status;
use App\Models\Kabupaten;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class FakturController extends Controller
{

    public function data(Request $request){

        $orderBy = 'faktur.nomor_faktur';
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
                ->orWhereRaw('LOWER(nama_nasabah) like ?',['%'.strtolower($request->input('search.value')).'%']);
            });
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
        $data = $data->with('kabupatenRelasi')->with('statusRelasi')->with('userRelasi')->orderBy($orderBy, $request->input('order.0.dir'))->get();
        $rekamTotal = $data->count();
        return response()->json([
            'draw'=>$request->input('draw'),
            'recordsTotal'=>$rekamTotal,
            'recordsFiltered'=>$rekamFilter,
            'data'=>$data
        ]);
    }
    public function data_faktur(){
        $dataFaktur = Faktur::get();
        $status = Status::get();
        $kabupaten = Kabupaten::where('aktif', 1)->get();
        return view('biro.data-faktur.index', compact('dataFaktur', 'status', 'kabupaten'));
    }
    public function index(){
        $faktur_hariini = Faktur::where('created_at', Carbon::now())->count();
        // $carbon = Carbon::now();
        // ddd($carbon);
        $faktur_semua = Faktur::count();
        $faktur_terverifikasi = Faktur::where('status_id',3)->count();
        return view('biro.dashboard.index', compact('faktur_hariini','faktur_semua', 'faktur_terverifikasi'));
    }

    public function total_perbulan(Request $request){
        if($request->ajax()){
            $data = $request->all();
            $tampilProdukStok = Faktur::where('status_id',3)->count();
            echo $tampilProdukStok;
        }
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
    
    public function tampil_data_faktur(){
        $data['faktur'] = Faktur::all();
	    return DataTables::of($data['faktur'])
                ->addColumn('aksi' , function ($row) {
                    return 
                    '<button data-toggle="modal" data-target="#modalEdit" class="btn btn-icon btn-sm waves-effect 
                    waves-light btn-warning text-white" title="Edit" 
                    data-id="'.$row->id.'" 
                    data-nomor_faktur="'.$row->nomor_faktur.'" 
                    data-nama_nasabah="'.$row->nama_nasabah.'" 
                    data-nomor_rangka="'.$row->nomor_rangka.'"
                    data-nomor_mesin="'.$row->nomor_mesin.'" 
                    data-kabupaten_id="'.$row->kabupatenRelasi->kabupaten.'"
                    data-status_id="'.$row->statusRelasi->status.'"
                    data-created_at="'.$row->created_at.'"
                    onclick="functionEdit(this);">
                        <i class="mdi mdi-pencil-outline"></i>
                    </button>
                    <button class="btn btn-icon btn-sm waves-effect waves-light btn-danger" title="Hapus" data-id="'.$row->id.'" 
                    onclick="hapus(this);">
                        <i class="mdi mdi-trash-can-outline"></i>
                    </button>
                    ';
                })			
				->addColumn('nomor_faktur' , function ($row) {
				    return $row->nomor_faktur;
                })
				->addColumn('nama_nasabah' , function ($row) {
					return $row->nama_nasabah;
				})
				->addColumn('kabupaten_id' , function ($row) {
					return $row->kabupatenRelasi->kabupaten;
				})
				->addColumn('created_at' , function ($row) {
					return $row->created_at;
				})
                ->addColumn('status_id' , function ($row) {
					return $row->statusRelasi->status;
				})
				->rawColumns(['aksi'])
                ->addIndexColumn()
                ->make(true);
    }

    public function filter_status(Request $request){
        $status = Status::get();
        $kabupaten = Kabupaten::get();

        if(isset($request->status)){
            $status = $request->status;
            // dd($status);
            $dataFaktur = Faktur::whereIn('status_id', explode(',', $status))->get();
            // dd($dataFaktur);
            // response()->json($dataFaktur);
            return view('FE_Biro.list_faktur')->with(compact('dataFaktur', 'status', 'kabupaten'));
        }
        elseif(isset($request->status ) == '') {
            $dataFaktur = Faktur::get();
            return view('FE_Biro.list_faktur')->with(compact('dataFaktur', 'status', 'kabupaten'));
        }
    }
}