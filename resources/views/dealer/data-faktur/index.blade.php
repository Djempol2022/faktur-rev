@extends('layouts.main', ['title' => 'Data Faktur'])
@section('content')
	<div class="row">
		<div class="col-md-12 grid-margin">
			<div class="row">
				<div class="col-12 col-xl-8 mb-4 mb-xl-0">
					<h3 class="font-weight-bold">Data Faktur</h3>
					<h6 class="font-weight-normal mb-0">Berikut data faktur yang tersimpan.</h6>
				</div>
			</div>
		</div>
	</div>
	<div class="row justify-content-between grid-margin">
		<div class="col-md-5">
			<div class="row">
				<div class="col-12 col-md-6 pr-md-0">
					<button class="btn btn-primary w-100">Tambah Data</button>
				</div>
				<div class="col-12 col-md-6">
					<select class="btn btn-light dropdown-toggle">
						<option value="" selected disabled>Status Faktur</option>
						<option value="">Option 1</option>
						<option value="">Option 2</option>
						<option value="">Option 3</option>
					</select>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<input type="text" class="form-control" placeholder="Pencarian">
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 grid-margin">
			<button class="btn btn-sm btn-primary">Bengkayang</button>
			<button class="btn btn-sm text-primary">Singkawang</button>
			<button class="btn btn-sm text-primary">Sambas</button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 grid-margin">
			<p>Berikut data faktur berdasarkan wilayah Bengkayang</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 grid-margin">
			<div class="card">
				<div class="table-responsive">
					<table class="table table-hover table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Nomor Faktur</th>
								<th>Nama Nasabah</th>
								<th>Kabupaten</th>
								<th>Tanggal In</th>
								<th>Status Faktur</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<x-table-row no="1" no_faktur="00001" nama_nasabah="Budi" kabupaten="Bengkayang" tanggal_in="24 Nov 2022"
								status="1" />
							<x-table-row no="2" no_faktur="00002" nama_nasabah="Sasha" kabupaten="Bengkayang" tanggal_in="24 Nov 2022"
								status="2" />
							<x-table-row no="3" no_faktur="00003" nama_nasabah="Jason" kabupaten="Bengkayang" tanggal_in="24 Nov 2022"
								status="3" />
							<x-table-row no="4" no_faktur="00004" nama_nasabah="Bruno" kabupaten="Bengkayang" tanggal_in="24 Nov 2022"
								status="3" />
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection
