<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/tiny-slider.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.html">Furni<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li>
							<a class="nav-link" href="/">Home</a>
						</li>
					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                            <li class="nav-item active">
                                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#userModal">
                                    <img src="assets/images/user.svg" alt="User">
                                </a>
                            </li>
                            <li><a class="nav-link" href="/cart"><img src="assets/images/cart.svg"></a></li>
                        </ul>
					</ul>
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->

		<div class="container-fluid px-4">
			<h1 class="mt-4">Profile</h1>
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item active">Your Profile Information</li>
			</ol>
		
			<div class="card mb-4 shadow-sm">
				<div class="card-header bg-light">
					<h5 class="mb-0">Profile Details</h5>
				</div>
				<div class="card-body">
					<div class="row mb-3">
						<div class="col-md-4">
							<img src="{{ $user->photo_url ?? url('image/nophoto.jpg') }}" 
								 alt="Profile Picture" 
								 class="img-thumbnail rounded-circle" 
								 style="width: 150px; height: 150px;">
						</div>
						<div class="col-md-8">
							<h4>{{ $user->name }}</h4>
							<p><strong>Email:</strong> {{ $user->email }}</p>
							<p><strong>Joined:</strong> {{ $user->created_at->format('d M Y') }}</p>
							<p><strong>Bio:</strong> {{ $user->bio ?? 'No bio available' }}</p>
						</div>
					</div>
					<!-- Removed the Edit Profile button -->
				</div>
			</div>
		</div>


		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Furni<span>.</span></a></div>
						<p class="mb-4">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant</p>

						<ul class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">About us</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Contact us</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Support</a></li>
									<li><a href="#">Knowledge base</a></li>
									<li><a href="#">Live chat</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Our team</a></li>
									<li><a href="#">Leadership</a></li>
									<li><a href="#">Privacy Policy</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Nordic Chair</a></li>
									<li><a href="#">Kruzo Aero</a></li>
									<li><a href="#">Ergonomic Chair</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> Distributed By <a hreff="https://themewagon.com">ThemeWagon</a>  <!-- License information: https://untree.co/license/ -->
            </p>
						</div>

					</div>
				</div>

			</div>
		</footer>
		<!-- End Footer Section -->	

		<!-- Pop Up Untuk PROFILE -->
        <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content border-0 shadow-lg" style="background-color: #2c2f33; color: #f5f6f7;">
					<div class="modal-header" style="background-color: #23272a; border-bottom: 1px solid #444;">
						<h5 class="modal-title" id="userModalLabel">Log Out</h5>
						<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body text-center">
						<p class="mb-4 fs-5">Do you Wish to Log Out?</p>
						<ul class="list-unstyled">
							<li>
								<a href="/logout" class="btn w-100" style="background-color: #f04747; color: #fff; border: none;">
									<i class="bi bi-box-arrow-right me-2"></i> Logout
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>


		<script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
		<script src="assets/js/tiny-slider.js"></script>
		<script src="assets/js/custom.js"></script>
	</body>

</html>
