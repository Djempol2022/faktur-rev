@extends('layouts.main', ['title' => 'Pengaturan'])
@section('content')
	<div class="row">
		<div class="col-md-12 grid-margin">
			<div class="row">
				<div class="col-12 col-xl-8 mb-4 mb-xl-0">
					<h3 class="font-weight-bold">Pengaturan</h3>
					<h6 class="font-weight-normal mb-0">Kelola keamanan akun anda di sini.</h6>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 grid-margin transparent">
			<div class="row">
				<x-dashboard-card href="{{ route('dealer.pengaturan.profil') }}" icon="account" title="Edit Profil"
					color="dark-blue" />
				<x-dashboard-card href="{{ route('dealer.pengaturan.password') }}" icon="book-open" title="Edit Password"
					color="dark-blue" />
			</div>
		</div>
	</div>
@endsection
