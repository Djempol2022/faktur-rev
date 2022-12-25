@extends('layouts.auth', ['title' => 'Login'])
@section('content')
	<div class="container-scroller">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="content-wrapper d-flex align-items-center auth px-0">
				<div class="row w-100 mx-0">
					<div class="col-lg-4 mx-auto">
						<div class="auth-form-light text-left py-5 px-4 px-sm-5" style="border-radius: 12px; box-shadow: 10px 10px 30px rgba(0, 0, 0, 0.05);">
							<div class="brand-logo">
								<img src="{{ asset('images/Logofakturbesar.png') }}" class="w-75" alt="logo">
							</div>
							<h4>Selamat Datang 👋</h4>
							<p class="font-weight-normal">Ayo mulai pekerjaan dengan masuk ke aplikasi<br>E-Faktur Devill Singkawang.</p>
							<form class="pt-3" action="{{ route('login') }}" method="POST">
								@csrf
								<div class="form-group">
									<label for="inputEmail" class="font-weight-bold">Email</label>
									<input type="email" class="form-control form-control-lg rounded px-3" name="email" id="inputEmail"
										placeholder="Masukan Email Anda Disini. . .">
								</div>
								<div class="form-group">
									<label for="inputPassword" class="font-weight-bold">Password</label>
									<input type="password" class="form-control form-control-lg rounded px-3" name="password" id="inputPassword"
										placeholder="Masukan Password Anda Disini">
								</div>
								<div class="mt-3">
									<button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn font-weight-bold font-size-5">Masuk</button>
								</div>
								{{-- <div class="my-2 d-flex justify-content-between align-items-center">
									<div class="form-check">
										<label class="form-check-label text-muted">
											<input type="checkbox" class="form-check-input">
											Keep me signed in
										</label>
									</div>
									<a href="#" class="auth-link text-black">Forgot password?</a>
								</div> --}}
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- content-wrapper ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
@endsection
