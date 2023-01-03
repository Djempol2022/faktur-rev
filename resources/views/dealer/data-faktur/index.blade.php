@extends('layouts.main', ['title' => 'Data Faktur'])
@section('content')

<div class="row">
    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        <h3 class="font-weight-bold">Data Faktur</h3>
        <h6 class="font-weight-normal mb-0">Berikut data faktur yang tersimpan.</h6>
    </div>
</div>
<div class="row justify-content-between">
    <div class="col-md-7">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3" style="padding-bottom: 10px;">
                    <a href="#" status-id=""
                    class="btn tampil_status text-white"
                    data-original-title="Semua Data" data-toggle="modal"
                    data-target="#tambah-faktur"
                    style="background-color: #4B49AC; border-radius:12px;">
                    <span class="font-weight-bold" style="font-size: 20px;">+ </span>Tambah Akun
                </a>
                </div>
                <div class="col-md-4">
                    <select class="form-control form-control-sm filter py-1" id="filter-status" style="width: 
                    167px; border-radius: 12px;">
                        <option value="">Status Faktur</option>
                        @foreach ($status as $statuss)
                        <option value="{{ $statuss->id }}">{{ $statuss->status }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card-body">
                @foreach ($kabupaten as $dataKabupaten)
                <a href="#" kabupaten-id="{{ $dataKabupaten->id }}"
                    class="btn btn-status tampil_kabupaten"
                    data-original-title="Semua Data">
                    {{ $dataKabupaten->kabupaten }}
                </a>
                @endforeach
                {{-- @foreach ($status as $statuss)
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
                @endforeach --}}
        </div>
    </div>
</div>
<div class="row justify-content-between">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table_faktur" class="table table-striped w-100">
                        <thead>
                            <tr>
                                {{-- <th class="v-align-middle" style="width: 50px;">No</th> --}}
                                <th>Nomor Faktur</th>
                                <th>Nama Nasabah</th>
                                <th>Kabupaten</th>
                                <th>Tanggal In</th>
                                <th class="v-align-middle" style="width: 50px; min-width: 50px;">Aksi</th>
                                <th>Status Faktur</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="tambah-faktur" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" style="position: absolute;
    right: 0;
    left: 0;
    margin-top: 20px;
    margin-bottom: 20%;"
    role="document">
        <form class="form-horizontal w-100" method="POST" action="{{ route('dealer.TambahFaktur') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title"><b>Tambah Data Faktur</b></h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>      
                <div class="modal-body" style="padding: 12px 26px;">
                    <div class="form-group">
						<strong>Nomor Faktur</strong>
                        <input type="number" name="nomor_faktur" class="form-control" placeholder="Nomor Faktur">
                    </div>
                    <div class="form-group">
						<strong>Nama Nasabah</strong>
                        <input type="text" name="nama_nasabah" class="form-control" placeholder="Nama Nasabah">
                    </div>
                    <div class="form-group">
						<strong>Nomor Rangka</strong>
                        <input type="number" name="nomor_rangka" class="form-control" placeholder="Nomor Rangka">
                    </div>
                    <div class="form-group">
						<strong>Nomor Mesin</strong>
                        <input type="number" name="nomor_mesin" class="form-control" placeholder="Nomor Mesin">
                    </div>
                    <div class="form-group">
						<strong>Nama Kabupaten</strong>
						<select class="form-control form-control-sm js-example-basic-single" name="kabupaten_id">
                            <option value="" selected disabled>Pilih Kabupaten</option>
                            @foreach ($kabupaten as $data_kabupaten)
                                <option value="{{ $data_kabupaten->id }}">{{ $data_kabupaten->kabupaten }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
						<strong>Tanggal In</strong>
						<input type="date" class="form-control" name="created_at" required="">
                    </div>
                </div>
                <div class="modal-footer" style="padding: 10px 26px;">
                    <button type="submit" class="btn btn-dark mr-2 btn-block" style="border: none;background: #4747A1;border-radius: 10px;">Simpan Data</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="modal-edit1" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" style="position: absolute;
    right: 0;
    left: 0;
    margin-top: 20px;
    margin-bottom: 20%;"
    role="document">
        <form id="form-edit1" class="form-horizontal w-100" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title"><b>Detail Faktur Data&nbsp;</h6><h6 class="modal-title nama_nasabah" style="font-weight: bold"></h6></b>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>      
                <div class="modal-body" style="padding: 12px 26px;">
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
						<p name="nomor_faktur" class="nama_nasabah" id="nama_nasabah"></p>
                    </div>
                    <div class="form-group">
						<strong>Nama Nasabah</strong>
						<p name="nomor_faktur" class="nomor_rangka" id="nomor_rangka"></p>
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
                        <strong>Status</strong>
						<p name="status_id" class="status_id btn-danger" id="status_id" style="padding-left: 2px;border-radius: 4px;color: white;font-weight: bold;width: 30%;""></p>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>

<div id="modal-edit2" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document" style="position: absolute;
        right: 0;
        left: 0;
        margin-top: 20px;
        margin-bottom: 20%;">
        <form id="form-edit2" class="form-horizontal w-100" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title"><b>Detail Faktur Data&nbsp;</h6><h6 class="modal-title nama_nasabah" style="font-weight: bold"></h6></b>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>      
                <div class="modal-body" style="padding: 12px 26px;">
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
						<p name="nomor_faktur" class="nama_nasabah" id="nama_nasabah"></p>
                    </div>
                    <div class="form-group">
						<strong>Nama Nasabah</strong>
						<p name="nomor_faktur" class="nomor_rangka" id="nomor_rangka"></p>
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
                        <strong>Status</strong>
						<p name="status_id" class="status_id btn-warning" id="status_id" style="padding-left: 2px;border-radius: 4px;color: white;font-weight: bold;width: 35%;"></p>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>

<div id="modal-edit3" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document" style="position: absolute;
        right: 0;
        left: 0;
        margin-top: 20px;
        margin-bottom: 20%;">
        <form id="form-edit3" class="form-horizontal w-100" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title"><b>Detail Faktur Data&nbsp;</h6><h6 class="modal-title nama_nasabah" style="font-weight: bold"></h6></b>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>      
                <div class="modal-body" style="padding: 12px 26px;">
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
						<p name="nomor_faktur" class="nama_nasabah" id="nama_nasabah"></p>
                    </div>
                    <div class="form-group">
						<strong>Nama Nasabah</strong>
						<p name="nomor_faktur" class="nomor_rangka" id="nomor_rangka"></p>
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
                        <strong>Status</strong>
						<p name="status_id" class="status_id btn-success" id="status_id" style="padding-left: 2px;border-radius: 4px;color: white;font-weight: bold;width: 25%;"></p>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>

@endsection
@section('script')

<script type="text/javascript">

    $(".tampil_kabupaten").click(function () {
        $(".tampil_kabupaten").removeClass("active");
        $(this).addClass("active");
    });
    
    let list_faktur = [];
    let data_status = $('#filter-status').val()
    var data_kabupaten_id = $(this).attr('kabupaten-id');
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
                d.data_status = data_status;
                d.data_kabupaten_id = data_kabupaten_id;
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
                    return moment(row.created_at).format('DD MMMM YYYY, h:mm:ss a');
                }
            },
            {
                "targets": 4,
                "sortable": false,
                "render": function (data, type, row, meta) {
                    let tampilan;
                    if(row.status_id == "1"){
                        tampilan = `<button onclick="tampilDetailFaktur1(${row.id})" class="btn btn-sm btn-warning btn-block">
                                        <i class="mdi mdi-eye-outline"></i>Detail
                                    </button>`
                    }
                    else if(row.status_id == "2"){
                        tampilan = `<button onclick="tampilDetailFaktur2(${row.id})" class="btn btn-sm btn-warning btn-block">
                                        <i class="mdi mdi-eye-outline"></i>Detail
                                    </button>`
                    }
                    else if(row.status_id == "3"){
                        tampilan = `<button onclick="tampilDetailFaktur3(${row.id})" class="btn btn-sm btn-warning btn-block">
                                        <i class="mdi mdi-eye-outline"></i>Detail
                                    </button>`
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
                        tampilan = `<button class="btn btn-sm btn-danger btn-block">Belum Terverifikasi</buttom>`
                    }
                    else if(row.status_relasi.id == "2"){
                        tampilan = `<button class="btn btn-sm btn-warning btn-block">Terverifikasi Samsat</buttom>`
                    }
                    else if(row.status_relasi.id == "3"){
                        tampilan = `<button class="btn btn-sm btn-success btn-block">Biro ke Dealer</buttom>`
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
        $("#form-edit1 .status_id").text(faktur.status_relasi.status)
        $("#form-edit1 .created_at").text(moment(faktur.created_at).format('DD MMMM YYYY, h:mm:ss a'))
    }

    function tampilDetailFaktur2(id) {
        const faktur = list_faktur[id]
        $("#modal-edit2").modal('show')
        $("#form-edit2 [name='id']").val(id)
        $("#form-edit2 .nomor_faktur").text(faktur.nomor_faktur)
        $("#form-edit2 .nama_nasabah").text(faktur.nama_nasabah)
        $("#form-edit2 .nama_dealer").text(faktur.user_relasi.name)
        $("#form-edit2 .nomor_rangka").text(faktur.nomor_rangka)
        $("#form-edit2 .nomor_mesin").text(faktur.nomor_mesin)
        $("#form-edit2 .kabupaten_id").text(faktur.kabupaten_relasi.kabupaten)
        $("#form-edit2 .status_id").text(faktur.status_relasi.status)
        $("#form-edit2 .created_at").text(moment(faktur.created_at).format('DD MMMM YYYY, h:mm:ss a'))
        $("#form-edit2 .updated_at").text(moment(faktur.updated_at).format('DD MMMM YYYY, h:mm:ss a'))
    }

    function tampilDetailFaktur3(id) {
        const faktur = list_faktur[id]
        $("#modal-edit3").modal('show')
        $("#form-edit3 [name='id']").val(id)
        $("#form-edit3 .nomor_faktur").text(faktur.nomor_faktur)
        $("#form-edit3 .nama_nasabah").text(faktur.nama_nasabah)
        $("#form-edit3 .nama_dealer").text(faktur.user_relasi.name)
        $("#form-edit3 .nomor_rangka").text(faktur.nomor_rangka)
        $("#form-edit3 .nomor_mesin").text(faktur.nomor_mesin)
        $("#form-edit3 .kabupaten_id").text(faktur.kabupaten_relasi.kabupaten)
        $("#form-edit3 .status_id").text(faktur.status_relasi.status)
        $("#form-edit3 .created_at").text(moment(faktur.created_at).format('DD MMMM YYYY, h:mm:ss a'))
        $("#form-edit3 .updated_at").text(moment(faktur.updated_at).format('DD MMMM YYYY, h:mm:ss a'))
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
        data_status = $('#filter-status').val()
        table.ajax.reload(null, false)
    })

    $('.tampil_kabupaten').click(function () {
        data_kabupaten_id = $(this).attr('kabupaten-id');
        // $(this).addClass("btn-primary").css("color", "white");
        table.ajax.reload(null, false)
    });

</script>
@endsection