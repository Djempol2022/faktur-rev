@extends('layouts.main', ['title' => 'Pengaturan'])
@section('content')
	<div class="row"> {{-- Card --}}
		<div class="col-md-10 grid-margin transparent">
			<div class="row">
				<div class="col-md-4 mb-4 stretch-card transparent">
					<div class="card card-dark-blue" style="border-radius:30px">
						<div class="card-body">
							<p class="fs-30 mb-2"><i class="mdi mdi-account"></i></p>
							<a href="{{route('biro.EditProfil')}}">
                            	<strong><h6 style="color:white">Edit Profile</h6></strong>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4 stretch-card transparent">
					<div class="card card-dark-blue" style="border-radius:30px">
						<div class="card-body">
                            <p class="fs-30 mb-2"><i class="mdi mdi-account-key"></i></p>
							<a href="{{route('biro.EditPassword')}}">
                            	<strong><h6 style="color:white">Edit Password</h6></strong>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4 stretch-card transparent">
					<div class="card card-dark-blue" style="border-radius:30px">
						<div class="card-body">
                            <p class="fs-30 mb-2"><i class="mdi mdi-crosshairs-gps"></i></p>
							<a href="{{route('biro.KelolaKabupaten')}}">
							<strong><h6 style="color:white">Kelola Kabupaten</h6></strong>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection