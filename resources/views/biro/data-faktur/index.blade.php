@extends('layouts.main', ['title' => 'Data Faktur'])
@section('content')

<div class="row">
    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        <h3 class="font-weight-bold">Data Faktur</h3>
        <h6 class="font-weight-normal mb-0">Berikut data faktur yang tersimpan.</h6>
    </div>
</div>
<div class="row justify-content-between">
    <div class="col-md-12" style="padding-top: 2.1rem">
            <div class="template-demo">
                <a href="#" status-id=""
                    class="btn btn-status tampil_status"
                    data-original-title="Semua Data">
                    Semua Data
                </a>
                @foreach ($status as $statuss)
                @if ($statuss->id == 1)
                <a href="#" status-id="1"
                    class="btn btn-status tampil_status"
                    data-original-title="Data ke Samsat">
                    Data ke Samsat
                </a>
                @elseif ($statuss->id == 2)
                <a href="#" status-id="2"
                    class="btn btn-status tampil_status"
                    data-original-title="Samsat ke Biro">
                    Samsat ke Biro
                </a>
                @elseif ($statuss->id == 3)
                <a href="#" status-id="3"
                    class="btn btn-status tampil_status"
                    data-original-title="Biro ke Dealer">
                    Biro ke Dealer
                </a>
                @endif
                @endforeach
            </div>
    </div>
    <div class="col-md-4 py-3">
            
                <select class="form-control form-control-sm filter py-1" style="width: 
                167px; border-radius: 12px;" id="filter-kabupaten">
                    <option value="">Pilih Kabupaten</option>
                    @foreach ($kabupaten as $dataKabupaten)
                    <option value="{{ $dataKabupaten->id }}">{{ $dataKabupaten->kabupaten }}</option>
                    @endforeach
                </select>
          
    </div>
</div>
<div class="row justify-content-between">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive table-hover">
                    <table id="table_faktur" class="table  w-100">
                        <thead>
                            <tr>
                                {{-- <th class="v-align-middle" style="width: 50px;">No</th> --}}
                                <th>Nomor Faktur</th>
                                <th>Nama Nasabah</th>
                                <th>Kabupaten</th>
                                <th>Tanggal In</th>
                                <th class="v-align-middle text-center" style="width: 50px; min-width: 50px;">Aksi</th>
                                <th class="text-center">Status Faktur</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="modal-edit1" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" style="position: absolute;
    right: 0;
    left: 0;
    margin-top: 20px;
    margin-bottom: 16%;
    role="document">
        <form id="form-edit1" class="form-horizontal w-100" action="{{ route('biro.VerifikasiSamsat') }}" role="form"
            data-parsley-validate novalidate method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" hidden>
            {{ method_field('PATCH') }}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><b>Detail Data Faktur&nbsp;</h5><h5 class="modal-title nama_nasabah" style="font-weight: bold"></h5></b>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>      
                <div class="modal-body py-0">
                    <div class="form-group">
						<strong>Nomor Faktur</strong>
						<p name="nomor_faktur" class="nomor_faktur" id="nomor_faktur"></p>
                    </div>
                    <div class="form-group">
						<strong>Nama Dealer</strong>
						<p name="nama_dealer" class="nama_dealer" id="nama_dealer"></p>
                    </div>
                    <div class="form-group">
						<strong>Nama Nasabah</strong>
						<p name="nama_nasabah" class="nama_nasabah" id="nama_nasabah"></p>
                    </div>
                    <div class="form-group">
						<strong>Nomor Rangka</strong>
						<p name="nomor_rangka" class="nomor_rangka" id="nama_nasabah"></p>
                    </div>
                    <div class="form-group">
						<strong>Nomor Mesin</strong>
						<p name="nomor_mesin" class="nomor_mesin" id="nomor_mesin"></p>
                    </div>
                    <div class="form-group">
						<strong>Nama Kabupaten</strong>
						<p name="kabupaten_id" class="kabupaten_id" id="kabupaten_id"></p>
                    </div>
                    <div class="form-group">
						<strong>Tanggal In</strong>
						<p name="created_at" class="created_at" id="created_at"></p>
                    </div>
                    <div class="form-group">
						<strong>Tanggal Out</strong>
						<input type="date" class="form-control" name="updated_at" id="updated_at"
                            placeholder="Example input" required="">
                    </div>
                </div>
                <div class="modal-footer" style="padding: 10px 26px;">
                    <p class="text-start">*Tekan tombol verifikasi untuk melanjutkan verifikasi ke samsat</p>
                    <button type="submit" class="btn btn-dark mr-2 btn-block" style="border: none;background: #4747A1;border-radius: 12px;">Verifikasi</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="modal-edit2" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" style="position: absolute;
    right: 0;
    left: 0;
    margin-top: 20px;
    margin-bottom: 16%;
    role="document">
        <form id="form-edit2" class="form-horizontal w-100" action="{{ route('biro.KirimKeDealer') }}" role="form"
            data-parsley-validate novalidate method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" hidden>
            {{ method_field('PATCH') }}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><b>Detail Data Faktur&nbsp;</h5><h5 class="modal-title nama_nasabah" style="font-weight: bold"></h5></b>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>         
                <div class="modal-body py-0">
                    <div class="form-group">
						<strong>Nomor Faktur</strong>
						<p name="nomor_faktur" class="nomor_faktur" id="nomor_faktur"></p>
                    </div>
                    <div class="form-group">
						<strong>Nama Dealer</strong>
						<p name="nama_dealer" class="nama_dealer" id="nama_dealer"></p>
                    </div>
                    <div class="form-group">
						<strong>Nama Nasabah</strong>
						<p name="nama_nasabah" class="nama_nasabah" id="nama_nasabah"></p>
                    </div>
                    <div class="form-group">
						<strong>Nomor Rangka</strong>
						<p name="nomor_rangka" class="nomor_rangka" id="nama_nasabah"></p>
                    </div>
                    <div class="form-group">
						<strong>Nomor Mesin</strong>
						<p name="nomor_faktur" class="nomor_mesin" id="nomor_mesin"></p>
                    </div>
                    <div class="form-group">
						<strong>Nama Kabupaten</strong>
						<p name="nomor_faktur" class="kabupaten_id" id="kabupaten_id"></p>
                    </div>
                    <div class="form-group">
						<strong>Tanggal In</strong>
						<p name="created_at" class="created_at" id="created_at"></p>
                    </div>
                    <div class="form-group">
						<strong>Tanggal Out</strong>
						<p name="updated_at" class="updated_at" id="updated_at"></p>
                    </div>
                </div>
                <div class="modal-footer" style="padding: 5px 26px;">
                    <p>*Tekan tombol simpan untuk dikirim ke dealer</p>
                    <button type="submit" class="btn btn-dark mr-2 btn-block" style="border: none;background: #4747A1;border-radius: 12px;">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
@section('script')


<script type="text/javascript">
    let list_faktur = [];
    let data_kabupaten = $('#filter-kabupaten').val()
    var data_status_id = $(this).attr('status-id');
    const table = $('#table_faktur').DataTable({
        "pageLength": 10,
        "lengthMenu": [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, 'semua']
        ],
        "bLengthChange": true,
        "bFilter": true,
        "bInfo": true,
        "processing": true,
        "bServerSide": true,
        ajax: {
            url: "{{ route('Faktur') }}",
            type: "POST",
            data:function(d){
                d.data_kabupaten = data_kabupaten;
                d.data_status_id = data_status_id;
                return d
            }
        },
        columnDefs: [{
                targets: '_all',
                visible: true
            },
            {
                "targets": 0,
                "class": "text-nowrap",
                "render": function (data, type, row, meta) {
					list_faktur[row.id] = row;
                    return row.nomor_faktur;
                }
            },
            {
                "targets": 1,
                "class": "text-nowrap",
                "render": function (data, type, row, meta) {
                    return row.nama_nasabah;
                }
            },
            {
                "targets": 2,
                "class": "text-nowrap",
                "render": function (data, type, row, meta) {
                    return row.kabupaten_relasi.kabupaten;
                }
            },
            {
                "targets": 3,
                "class": "text-nowrap",
                "render": function (data, type, row, meta) {
                    return moment(row.created_at).format('YYYY MMMM DD, h:mm:ss a');
                }
            },
            {
                "targets": 4,
                "sortable": false,
                "render": function (data, type, row, meta) {
                    let tampilan;
                    if(row.status_id == "1"){
                        tampilan = `<button onclick="tampilDetailFaktur1(${row.id})" class="btn btn-sm btn-warning btn-block px-0 font-weight-bold">Detail</buttom>`
                    }
                    else if(row.status_id == "2"){
                        tampilan = `<button onclick="tampilDetailFaktur2(${row.id})" class="btn btn-sm btn-warning btn-block font-weight-bold">Detail</buttom>`
                    }
                    else if(row.status_id == "3"){
                        tampilan = `<button onclick="tampilDetailFaktur3(${row.id})" class="btn btn-sm btn-warning btn-block font-weight-bold">Detail</buttom>`
                    }
                    return tampilan;
                }
            },
            {
                "targets": 5,
                "class": "text-nowrap",
                "render": function (data, type, row, meta) {
                    let tampilan;
                    if(row.status_relasi.id == "1"){
                        tampilan = `<button class="btn btn-sm btn-danger btn-block font-weight-bold">Belum Terverifikasi</buttom>`
                    }
                    else if(row.status_relasi.id == "2"){
                        tampilan = `<button class="btn btn-sm btn-warning btn-block font-weight-bold">Terverifikasi Samsat</buttom>`
                    }
                    else if(row.status_relasi.id == "3"){
                        tampilan = `<button class="btn btn-sm btn-success btn-block font-weight-bold">Diterima Dealer</buttom>`
                    }
                    return tampilan;
                }
            },
        ]
    });

    function tampilDetailFaktur1(id) {
        const faktur = list_faktur[id]
		var data_status_id = faktur.status_id

        $("#modal-edit1").modal('show')
        $("#form-edit1 [name='id']").val(id)
        $("#form-edit1 .nomor_faktur").text(faktur.nomor_faktur)
        $("#form-edit1 .nama_nasabah").text(faktur.nama_nasabah)
        $("#form-edit1 .nama_dealer").text(faktur.user_relasi.name)
        $("#form-edit1 .nomor_rangka").text(faktur.nomor_rangka)
        $("#form-edit1 .nomor_mesin").text(faktur.nomor_mesin)
        $("#form-edit1 .kabupaten_id").text(faktur.kabupaten_relasi.kabupaten)
        $("#form-edit1 .created_at").text(faktur.created_at)
    }

    function tampilDetailFaktur2(id) {
        const faktur = list_faktur[id]
		var data_status_id = faktur.status_id

        $("#modal-edit2").modal('show')
        $("#form-edit2 [name='id']").val(id)
        $("#form-edit2 .nomor_faktur").text(faktur.nomor_faktur)
        $("#form-edit2 .nama_nasabah").text(faktur.nama_nasabah)
        $("#form-edit2 .nama_dealer").text(faktur.user_relasi.name)
        $("#form-edit2 .nomor_rangka").text(faktur.nomor_rangka)
        $("#form-edit2 .nomor_mesin").text(faktur.nomor_mesin)
        $("#form-edit2 .kabupaten_id").text(faktur.kabupaten_relasi.kabupaten)
        $("#form-edit2 .created_at").text(faktur.created_at)
        $("#form-edit2 .updated_at").text(faktur.updated_at)
    }

    $("#form-edit2").on('submit', function(e){
        e.preventDefault()
        $("#form-edit2").ajaxSubmit({
            success:function(res){
                if(res===true){
                table.ajax.reload(null,false)
                $("#modal-edit2").modal('hide')
            }
            }
        })
    })

    $("#form-edit1").on('submit', function(e){
        e.preventDefault()
        $("#form-edit1").ajaxSubmit({
            success:function(res){
                if(res===true){
                table.ajax.reload(null,false)
                $("#modal-edit1").modal('hide')
            }
            }
        })
    })

    $(".filter").on('change', function(){
        data_kabupaten = $('#filter-kabupaten').val()
        table.ajax.reload(null, false)
    })

    $('.tampil_status').click(function () {
        data_status_id = $(this).attr('status-id');
        // $(this).addClass("btn-primary").css("color", "white");
        table.ajax.reload(null, false)
    });
</script>
@endsection
