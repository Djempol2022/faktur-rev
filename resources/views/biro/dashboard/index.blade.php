@extends('layouts.main', ['title' => 'Dashboard'])
@section('content')
	<div class="row">
		<div class="col-md-12 grid-margin">
			<div class="row">
				<div class="col-12 col-xl-8 mb-4 mb-xl-0"> {{-- Content Head --}}
					<h3 class="font-weight-bold">Selamat Datang, Roban Motor 👋</h3>
					<h6 class="font-weight-normal mb-0">Pantau proses faktur anda dengan aplikasi ini.</h6>
				</div>
				<div class="col-12 col-xl-4"> {{-- Time Dropdown --}}
					<div class="justify-content-end d-flex">
						<div class="dropdown flex-md-grow-1 flex-xl-grow-0">
							<select class="form-control form-control-sm filterkan" id="filter-perbulan">
								<option value="">Hari ini</option>
								<option value="1">Januari</option>
								<option value="2">Februari</option>
								<option value="3">Maret</option>
								<option value="4">April</option>
								<option value="5">Mei</option>
								<option value="6">Juni</option>
								<option value="7">Juli</option>
								<option value="8">Agustus</option>
								<option value="9">September</option>
								<option value="10">Oktober</option>
								<option value="11">november</option>
								<option value="12">Desember</option>
							</select>
							{{-- <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								<i class="mdi mdi-calendar"></i>
								Today (10 Jan 2021)
							</button>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
								<a class="dropdown-item" href="#" value="1">January</a>
								<a class="dropdown-item" href="#" value="2">Februari</a>
								<a class="dropdown-item" href="#" value="3">Maret</a>
								<a class="dropdown-item" href="#" value="4">April</a>
								<a class="dropdown-item" href="#" value="5">Mei</a>
								<a class="dropdown-item" href="#" value="6">Juni</a>
								<a class="dropdown-item" href="#" value="7">Juli</a>
								<a class="dropdown-item" href="#" value="8">Agustus</a>
								<a class="dropdown-item" href="#" value="9">September</a>
								<a class="dropdown-item" href="#" value="10">Oktober</a>
								<a class="dropdown-item" href="#" value="11">November</a>
								<a class="dropdown-item" href="#" value="12">Desember</a>
							</div> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row"> {{-- Card --}}
		<div class="col-md-12 grid-margin transparent">
			<div class="row">
				<div class="col-md-4 mb-4 stretch-card transparent">
					<div class="card card-tale">
						<div class="card-body">
							<p class="mb-4">Faktur Masuk</p>
							<p class="fs-30 mb-2">{{ $faktur_hariini }}</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4 stretch-card transparent">
					<div class="card card-dark-blue">
						<div class="card-body">
							<p class="mb-4">Faktur Terverifikasi</p>
							<p class="total-terverifikasi fs-30 mb-2">{{ $faktur_terverifikasi }}</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4 stretch-card transparent">
					<div class="card card-light-danger">
						<div class="card-body">
							<p class="mb-4">Total Keseluruhan Faktur</p>
							<p class="fs-30 mb-2">{{ $faktur_semua }}</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
@endsection
@section('script')
<script>
		$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

	$(".filterkan").change(function () {
		var bulan_value = $('#filter-perbulan').val()
        $.ajax({
            url: '/data-perbulan',
            data: {
                bulan_value: bulan_value
            },
            type: 'post',
            success: function (resp) {
                $(".total-terverifikasi").html(resp);
            },
            error: function () {
                alert("error");
            }
        });
	});
</script>
@endsection