<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Masuk - SD Sengon 03</title>

		<!-- Meta -->
		<link rel="shortcut icon" href="logo2.png" />

		<!-- *************
			************ CSS Files *************
		************* -->
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="{{ asset('assets') }}/fonts/icomoon/style.css" />

		<!-- Main CSS -->
		<link rel="stylesheet" href="{{ asset('assets') }}/css/main.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	</head>

	<body class="bg-one">
		<!-- Container start -->
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-4 col-lg-5 col-sm-6 col-12">
					<form action="{{ route('postLogin') }}" method="POST" class="my-5">
                        @csrf
						<div class="card p-md-4 p-sm-3">
							<div class="login-form ">
								<a  class="mb-4 d-flex align-items-center justify-center">
									<img src="{{ asset('logo2.png') }}" class="img-fluid login-logo" alt="SD Sengon 03" />
								</a>
								<h2 class="mt-4 mb-4">SD Sengon 03</h2>
                                @if ($message = Session::get('gagal'))
                                    <div class="alert alert-danger alert-block mb-2">
                                        <p><i class="bi bi-x-circle-fill"></i><strong> Login gagal! </strong>{{ $message }}</p>
                                    </div>
                                @endif
								<div class="mb-3">
									<label class="form-label">Username</label>
									<input type="text" name="username" class="form-control" placeholder="Masukkan username anda" />
								</div>
								<div class="mb-3">
									<label class="form-label">Password</label>
									<div class="input-group">
										<input type="password" name="password" class="form-control" placeholder="Masukkan password" />
										<a href="#" class="input-group-text">
											<i class="icon-eye"></i>
										</a>
									</div>
								</div>
								<div class="d-grid py-3 mt-3">
									<button type="submit" class="btn btn-lg btn-success">
										LOGIN
									</button>
								</div>
								<div class="text-center pt-4">
									<span>Not registered?</span>
									<a href="{{ route('landing.register') }}" class="text-success text-decoration-underline">
										Daftar</a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Container end -->
	</body>

</html>
