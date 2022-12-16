@extends('layouts.main', ['title' => 'Edit Password'])
@section('content')
	<div class="row">
		<div class="col-md-12 grid-margin">
			<div class="row">
				<div class="col-12 col-xl-8 mb-4 mb-xl-0">
					<h3 class="font-weight-bold">Edit Password</h3>
					<h6 class="font-weight-normal mb-0">Kelola password anda di sini.</h6>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 grid-margin transparent">
			<form action="">
				<div class="form-group">
					<label for="old_password" class="font-weight-bold">Password Lama</label>
					<input type="password" class="form-control rounded" name="old_password" id="old_password"
						placeholder="Masukkan password lama">
				</div>
				<div class="form-group">
					<label for="password" class="font-weight-bold">Password Baru</label>
					<input type="password" class="form-control rounded" name="password" id="password"
						placeholder="Masukkan password baru">
				</div>
				<div class="form-group">
					<label for="password_confirmation" class="font-weight-bold">Konfirmasi Password Baru</label>
					<input type="password" class="form-control rounded" name="password_confirmation" id="password_confirmation"
						placeholder="Konfirmasi password baru">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>
				</div>
			</form>
		</div>
	</div>
@endsection
