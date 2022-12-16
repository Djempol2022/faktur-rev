@extends('layouts.main', ['title' => 'Dashboard'])
@section('content')
	<div class="row">
		<div class="col-md-12 grid-margin">
			<div class="row">
				<div class="col-12 col-xl-8 mb-4 mb-xl-0"> {{-- Content Head --}}
					<h3 class="font-weight-bold">Selamat Datang, {{ auth()->user()->name }} 👋</h3>
					<h6 class="font-weight-normal mb-0">Pantau proses faktur anda dengan aplikasi ini.</h6>
				</div>
				<div class="col-12 col-xl-4"> {{-- Time Dropdown --}}
					<div class="justify-content-end d-flex">
						<div class="dropdown flex-md-grow-1 flex-xl-grow-0">
							<button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								<i class="mdi mdi-calendar"></i>
								Today (10 Jan 2021)
							</button>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
								<a class="dropdown-item" href="#">January - March</a>
								<a class="dropdown-item" href="#">March - June</a>
								<a class="dropdown-item" href="#">June - August</a>
								<a class="dropdown-item" href="#">August - November</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row"> {{-- Card --}}
		<div class="col-md-12 grid-margin transparent">
			<div class="row">
				<x-dashboard-card title="Faktur Masuk" value="4006" color="tale" />
				<x-dashboard-card title="Faktur Terverivikasi" value="61344" color="dark-blue" />
				<x-dashboard-card title="Total Keseluruhan Faktur" value="47033" color="light-danger" />
			</div>
		</div>
	</div>
@endsection
