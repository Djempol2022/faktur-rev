@extends('layouts.main', ['title' => 'Data Pengguna'])
@section('content')

<div class="row">
    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        <h3 class="font-weight-bold">Data Pengguna</h3>
        <h6 class="font-weight-normal mb-0">Berikut data pengguna yang tersimpan.</h6>
    </div>
</div>
<div class="row justify-content-between">
    <div class="col-md-12">
            <div class="template-demo mt-4 mb-3">
                <a href="#" status-id=""
                    class="btn tampil_status text-white"
                    data-original-title="Semua Data" data-toggle="modal"
                    data-target="#modal-pengguna"
                    style="background-color: #4B49AC; border-radius:12px;">
                    <span class="font-weight-bold" style="font-size: 20px;">+ </span>Tambah Akun
                </a>
            </div>
    </div>
</div>
<div class="row justify-content-between">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table1" class="table table-hover w-100">
                        <thead>
                            <tr>
                                {{-- <th class="v-align-middle" style="width: 50px;">No</th> --}}
                                <th>Nomor Dealer</th>
                                <th>Email</th>
                                <th>Kabupaten</th>
                                <th class="text-center" style="width: 50px; min-width: 50px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_pengguna as $pengguna)
							    <tr>
                                    <td>{{ $pengguna->name }}</td>
                                    <td>{{ $pengguna->email }}</td>
                                    <td>{{ $pengguna->kabupatenRelasi->kabupaten }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-warning btn-icon-text">
                                            <i class="mdi mdi-pen btn-icon-prepend"  data-toggle="modal"
                                            data-target="#modal-edit-pengguna{{ $pengguna->id }}"></i>
                                        </button>
                                        <div id="modal-edit-pengguna{{ $pengguna->id }}" class="modal fade" tabindex="-1" role="dialog">
                                            <div class="modal-dialog modal-ml " role="document">
                                                <form id="form-pengguna" class="form-horizontal w-100" action="{{ route('biro.EditPengguna', $pengguna->id) }}" role="form" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"><b>Tambah Akun Pengguna</b></h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>      
                                                        <div class="modal-body">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1" class="font-weight-bold">Nama Dealer</label>
                                                                <input type="text" class="form-control" id="exampleInputUsername1" value="{{ $pengguna->name }}" name="name" placeholder="Username" style="border-radius: 5px;" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" class="font-weight-bold">Email</label>
                                                                <input type="email" class="form-control" id="exampleInputEmail1" value="{{ $pengguna->email }}" name="email" placeholder="Email" style="border-radius: 5px;" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1" class="font-weight-bold">Kabupaten</label>
                                                                <select class="form-control form-control-sm py-2 filter" name="kabupaten_id" id="filter-kabupaten" style="border-radius: 5px;" required>
                                                                    <option value="" disabled>Pilih Kabupaten</option>
                                                                    @foreach ($kabupaten as $dataKabupaten)
                                                                    @if ($pengguna->kabupaten_id == $dataKabupaten->id)
                                                                    <option value="{{ $dataKabupaten->id }}" selected>{{ $dataKabupaten->kabupaten }}</option>                                                                        
                                                                    @endif
                                                                    <option value="{{ $dataKabupaten->id }}">{{ $dataKabupaten->kabupaten }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                        
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-submit  btn-block text-white py-2" style="border-radius: 8px; background-color: #4B49AC;">Simpan Perubahan</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <button class="btn btn-sm btn-danger btn-icon-text hapus_pengguna" pengguna-id="{{ $pengguna->id }}">
                                            <i class="mdi mdi-delete btn-icon-prepend"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
						</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="modal-pengguna" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-ml " role="document">
        <form id="form-pengguna" class="form-horizontal w-100" action="{{ route('biro.TambahPengguna') }}" role="form" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><b>Tambah Akun Pengguna</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>      
                <div class="modal-body">
                <div class="card-body">
                    <div class="form-group pb-2">
                        <label for="exampleInputUsername1" class="font-weight-bold">Nama Dealer</label>
                        <input type="text" class="form-control" style="border-radius: 5px;" id="exampleInputUsername1" name="name" placeholder="Masukan Nama Dealer Disini. . ." required>
                    </div>
                    <div class="form-group py-2">
                        <label for="exampleInputEmail1" class="font-weight-bold">Email</label>
                        <input type="email" class="form-control" style="border-radius: 5px;" id="exampleInputEmail1" name="email" placeholder="Masukan Email Disini. . ." required>
                    </div>
                    <div class="form-group py-2">
                        <label for="exampleInputPassword1" class="font-weight-bold">Kabupaten</label>
                        <select class="form-control form-control-sm filter py-2" style="border-radius: 5px;" name="kabupaten_id" id="filter-kabupaten" required>
                            <option value="" selected disabled>Pilih Kabupaten</option>
                            @foreach ($kabupaten as $dataKabupaten)
                                <option value="{{ $dataKabupaten->id }}">{{ $dataKabupaten->kabupaten }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-submit btn-primary btn-block py-2" style="background-color: #4B49AC; border-radius: 8px;">Buat Akun</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
@section('script')
<script>
$('.hapus_pengguna').click(function () {
    //Buat variabel baru siswa_id, This mengacu pada clas yang di klik yaitu .delete kemudia ambil attributnya yaitu siswa_id
    var pengguna_id = $(this).attr('pengguna-id');
    swal({
            title: "Yakin ?",
            text: "Menghapus Data ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/biro/hapus-pengguna/" + pengguna_id;
            }
        });
});
</script>
@endsection