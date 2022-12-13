@extends('layout.main')
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
	<div class="row">
		<div class="col-md-12 grid-margin transparent">
			<div class="row justify-content-between">
				<div class="col-md-6">
					<div class="row">
						<button class="btn btn-primary col-md-4 mr-md-2">Tambah Data</button>
						<select class="form-control rounded col-md-6">
							<option value="" selected disabled>Status Faktur</option>
							<option value="">Option 1</option>
							<option value="">Option 2</option>
							<option value="">Option 3</option>
						</select>
					</div>
				</div>
				<div class="col-md-4 m-0">
					<input type="text" class="form-control mx-0" placeholder="Pencarian">
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 grid-margin">
			<div class="table-responsive">
				<table class="table table-hover">
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
						<x-table-row no="1" no_faktur="12345" nama_nasabah="Budi" kabupaten="Bengkayang" tanggal_in="24 Nov 2022"
							status="Terverifikasi Samsat" />
						<tr>
							<td>1</td>
							<td>12345</td>
							<td>Budi</td>
							<td>Bengkayang</td>
							<td>24 Nov 2022</td>
							<td>
								<label class="badge badge-warning">Terverifikasi Samsat</label>
							</td>
							<td>
								<a href="" class="btn btn-sm btn-warning ">
									<span class="d-flex align-items-center">
										<i class="mdi mdi-eye mr-1"></i>
										Detail</span>
								</a>
							</td>
						</tr>
						<tr>
							<td>Jacob</td>
							<td>Photoshop</td>
							<td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
							<td><label class="badge badge-danger">Pending</label></td>
						</tr>
						<tr>
							<td>Messsy</td>
							<td>Flash</td>
							<td class="text-danger"> 21.06% <i class="ti-arrow-down"></i></td>
							<td><label class="badge badge-warning">In progress</label></td>
						</tr>
						<tr>
							<td>John</td>
							<td>Premier</td>
							<td class="text-danger"> 35.00% <i class="ti-arrow-down"></i></td>
							<td><label class="badge badge-info">Fixed</label></td>
						</tr>
						<tr>
							<td>Peter</td>
							<td>After effects</td>
							<td class="text-success"> 82.00% <i class="ti-arrow-up"></i></td>
							<td><label class="badge badge-success">Completed</label></td>
						</tr>
						<tr>
							<td>Dave</td>
							<td>53275535</td>
							<td class="text-success"> 98.05% <i class="ti-arrow-up"></i></td>
							<td><label class="badge badge-warning">In progress</label></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection
