@extends('layouts.main', ['title' => 'Edit Profil'])
@section('content')
	<div class="row">
		<div class="col-md-12 grid-margin">
			<div class="row">
				<div class="col-12 col-xl-8 mb-4 mb-xl-0">
					<h3 class="font-weight-bold">Edit Profil</h3>
					<h6 class="font-weight-normal mb-0">Kelola profil anda di sini.</h6>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 grid-margin transparent">
			<form action="" enctype="multipart/form-data">
				<div class="form-group">
					<img src="{{ asset('images/faces/face26.jpg') }}" class="rounded-circle" alt="foto profil">
					<label for="foto" class="btn btn-sm btn-primary">Pilih Gambar</label>
					<input type="file" name="foto" class="d-none" id="foto">
				</div>
				<div class="form-group">
					<label for="name" class="font-weight-bold">Nama Dealer</label>
					<input type="text" class="form-control rounded" name="name" id="name" placeholder="Masukkan nama dealer">
				</div>
				<div class="form-group">
					<label for="email" class="font-weight-bold">Nama Dealer</label>
					<input type="text" class="form-control rounded" name="email" id="email"
						placeholder="Masukkan email dealer">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>
				</div>
			</form>
		</div>
	</div>
@endsection
