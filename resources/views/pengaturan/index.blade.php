@extends('layouts.main', ['title' => 'Pengaturan'])
@section('content')
	<div class="row"> {{-- Card --}}
		<div class="col-md-10 grid-margin transparent">
			<div class="row pb-5">
				<div class="col-12 col-xl-8 mb-4 mb-xl-0"> {{-- Content Head --}}
					<h3 class="font-weight-bold">Pengaturan</h3>
					<h6 class="font-weight-normal mb-0">Kelola sistem aplikasi dengan beberapa fitur dibawah ini.</h6>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 mb-4 stretch-card transparent">
					<div class="card card-dark-blue card-dashboard-biro " style="border-radius:30px">
						<div class="card-body py-5 py-5">
							<p class="fs-30 mb-2 "><i class="mdi mdi-account"></i></p>
							<a href="{{route('EditProfil')}}">
                            	<strong><h5 style="color:white">Edit Profile</h5></strong>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4 stretch-card transparent">
					<div class="card card-dark-blue card-dashboard-biro" style="border-radius:30px">
						<div class="card-body py-5">
                            <p class="fs-30 mb-2"><i class="mdi mdi-account-key"></i></p>
							<a href="{{route('EditPassword')}}">
                            	<strong><h5 style="color:white">Edit Password</h5></strong>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4 stretch-card transparent">
					<div class="card card-dark-blue card-dashboard-biro" style="border-radius:30px">
						<div class="card-body py-5">
                            <p class="fs-30 mb-2"><i class="mdi mdi-crosshairs-gps"></i></p>
							<a href="{{route('biro.KelolaKabupaten')}}">
							<strong><h5 style="color:white">Kelola Kabupaten</h5></strong>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection