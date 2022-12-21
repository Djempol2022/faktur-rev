@extends('layouts.main', ['title' => 'Data Kabupaten'])
@section('content')

<div class="row">
    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        <h3 class="font-weight-bold">Kelola Kabupaten</h3>
        <h6 class="font-weight-normal mb-0">Kelola kabupaten anda disini</h6>
    </div>
</div>
<div class="row justify-content-between">
    <div class="col-md-12">
        <div class="card-body">
            <div class="template-demo">
                <a href="#" status-id=""
                class="btn btn-dark mr-2" style="border: none;background: #4747A1;border-radius: 10px;"
                    data-original-title="Semua Data" data-toggle="modal"
                    data-target="#modal-kabupaten">
                    Tambah Data
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-between">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table1" class="table table-bordered w-100">
                        <thead>
                            <tr>
                                {{-- <th class="v-align-middle" style="width: 50px;">No</th> --}}
                                <th>No</th>
                                <th>Nama Kabupaten</th>
                                <th class="v-align-middle" style="width: 50px; min-width: 50px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_kabupaten as $no => $kabupaten)
							    <tr>
                                    <td>{{ $no+1 }}</td>
                                    <td>{{ $kabupaten->kabupaten }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-danger btn-icon-text hapus_kabupaten" kabupaten-id="{{ $kabupaten->id }}">
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


<div id="modal-kabupaten" class="modal fade" role="dialog">
    <div class="modal-dialog modal-ml " role="document">
        <form id="form-kabupaten" class="form-horizontal w-100" action="{{ route('biro.AktifkanKabupaten') }}" role="form" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><b>Tambah Kabupaten</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <label for="exampleInputPassword1"><strong>Nama Kabupaten<strong></label>
                        <select class="form-control form-control-sm filter js-example-basic-single" name="kabupaten_id">
                            <option value="" selected disabled>Pilih Kabupaten</option>
                            @foreach ($semua_kabupaten as $kabupaten)
                                <option value="{{ $kabupaten->id }}">{{ $kabupaten->kabupaten }}</option>
                            @endforeach
                        </select>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-dark mr-2 btn-block" style="border: none;background: #4747A1;border-radius: 10px;">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
@section('script')
<script>
$(document).ready(function() {
    $( '.js-example-basic-single' ).select2( {
        theme: 'bootstrap-5'
    });
});
$('.hapus_kabupaten').click(function () {
    //Buat variabel baru siswa_id, This mengacu pada clas yang di klik yaitu .delete kemudia ambil attributnya yaitu siswa_id
    var kabupaten_id = $(this).attr('kabupaten-id');
    swal({
            title: "Yakin ?",
            text: "Menghapus Data ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/biro/hapus-kabupaten/" + kabupaten_id;
            }
        });
});
</script>
@endsection