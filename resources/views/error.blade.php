<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>SD Sengon 03 - 404 Error</title>

		<meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
		<meta property="og:type" content="Website">
		<meta property="og:site_name" content="Bootstrap Gallery">
		<link rel="shortcut icon" href="logo2.png" />

		<!-- *************
			************ CSS Files *************
		************* -->
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="{{ asset('assets') }}/fonts/icomoon/style.css" />

		<!-- Main CSS -->
		<link rel="stylesheet" href="{{ asset('assets') }}/css/main.min.css" />

		<!-- *************
			************ Vendor Css Files *************
		************ -->
	</head>

	<body class="bg-one">
		<!-- Container start -->
		<div class="container">
			<div class="row justify-content-center align-items-center vh-100">
				<div class="col-sm-6 col-12">
					<div class="text-warning">
						<h1 class="display-1 fw-bold">404</h1>
						<h6 class="lh-2">Mohon maaf, anda tidak bisa mengakses halaman ini.</h6>
						<img src="{{ ('assets') }}/images/error.svg" class="img-fluid" alt="Bootstrap Dashboards" />
						<div class="text-end">
							<a href="{{ route('index.dashboard') }}" class="btn btn-light rounded-5 px-4 py-3 shadow">Kembali ke dashboard</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Container end -->
	</body>

</html>
