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
		<title>UAS Project Pemograman Web - 3bytes </title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="/client">Decora<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home</a>
						</li>
						<li><a class="nav-link" href="/shop">Shop</a></li>
						<li><a class="nav-link" href="/about">About us</a></li>
						<li><a class="nav-link" href="/contact">Contact us</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                            <li>
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

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Modern Interior <span clsas="d-block">Design Studio</span></h1>
								<p class="mb-4">Transform your Space With Modern Furniture</p>
								<p><a href="/shop" class="btn btn-secondary me-2">Shop Now</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="assets/images/sofakuningkanan.png" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		<!-- Start Product Section -->
		<div class="product-section">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">Crafted with excellent material.</h2>
						<p class="mb-4">Each of our products is designed with precision and crafted using the finest materials to ensure durability, comfort, and style. Discover the perfect piece to enhance your living space. </p>
						<p><a href="/shop" class="btn">Explore</a></p>
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					@foreach($produk as $item)
						<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
							<a class="product-item" href="{{ route('client.show', $item->id) }}">
								<img src="{{ url('image/' . $item->foto) }}" class="img-fluid product-thumbnail" alt="{{ $item->nama }}">
								<h3 class="product-title">{{ $item->nama }}</h3>
								<strong class="product-price">Rp. {{ number_format($item->harga_jual, 0, ',', '.') }}</strong>

								<span class="icon-cross">
									<img src="assets/images/cross.svg" class="img-fluid">
								</span>
							</a>
						</div>
					@endforeach
				
					<!-- End Column 2 -->

				</div>
			</div>
		</div>
		<!-- End Product Section -->

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 class="section-title">Why Choose Us</h2>
						<p>At our Modern Interior Design Studio, we prioritize your satisfaction by offering premium products, exceptional service, and a seamless shopping experience. Here's why we stand out and why customers love shopping with us.</p>

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="assets/images/truck.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Fast &amp; Free Shipping</h3>
									<p>Get your favorite products delivered quickly and without extra cost, straight to your doorstep.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="assets/images/bag.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Easy to Shop</h3>
									<p>Enjoy a seamless and hassle-free shopping experience with our user-friendly platform.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="assets/images/support.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>24/7 Support</h3>
									<p>We're here for you at any time of the day. Contact us whenever you need assistance.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="assets/images/return.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Hassle Free Returns</h3>
									<p>Shop with confidence knowing you can easily return items if they don't meet your expectations.</p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="assets/images/bedside table.jpg" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start We Help Section -->
		<div class="we-help-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-7 mb-5 mb-lg-0">
						<div class="imgs-grid">
							<div class="grid grid-1"><img src="assets/images/cermin berdiri.jpg" alt="Untree.co"></div>
							<div class="grid grid-2"><img src="assets/images/display cabinet2.jpg" alt="Untree.co"></div>
							<div class="grid grid-3"><img src="assets/images/credenza.jpg" alt="Untree.co"></div>
						</div>
					</div>
					<div class="col-lg-5 ps-lg-5">
						<h2 class="section-title mb-4">We Help You Make Modern Interior Design</h2>
						<p>Transform your home with our expert guidance and innovative ideas. Whether you need a cozy corner or a complete home makeover, we're here to bring your vision to life.</p>

						<ul class="list-unstyled custom-list my-4">
							<li>Innovative designs tailored to your needs.</li>
							<li>High-quality materials for lasting comfort.</li>
							<li>Affordable options for every budget.</li>
							<li>Expert advice to enhance your space.</li>
						</ul>
						<p><a href="/about" class="btn">Explore</a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- End We Help Section -->

		<!-- Start Popular Product -->
		<div class="popular-product">
			<div class="container">
				<div class="row">

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="assets/images/diningchair2.jpg" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Wool Dining Chair</h3>
								<p>Experience maximum comfort with an elegant wool dining chair, perfect for enhancing your dining space with a modern touch. </p>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="assets/images/coffeetable5.jpg" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Coffee Table</h3>
								<p>A minimalist coffee table with a unique design, ideal for creating a relaxing atmosphere in your living room. </p>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="assets/images/dressing table5.jpg" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Dressing Table</h3>
								<p>A multifunctional dressing table with a large mirror, designed to make getting ready effortless. A perfect addition to your bedroom. </p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Popular Product -->

		<!-- Start Testimonial Slider -->
		<div class="testimonial-section before-footer-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 mx-auto text-center">
						<h2 class="section-title">Testimonials</h2>
					</div>
				</div>
		
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="testimonial-slider-wrap text-center">
							<!-- Testimonial Navigation -->
							<div id="testimonial-nav">
								<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
								<span class="next" data-controls	="next"><span class="fa fa-chevron-right"></span></span>
							</div>
		
							<!-- Slider -->
							<div class="testimonial-slider">
								@foreach($reviews as $review)
									<div class="item">
										<div class="row justify-content-center">
											<div class="col-lg-8 mx-auto">
												<div class="testimonial-block text-center">
													<blockquote class="mb-5">
														<p>&ldquo;{{ $review->comment }}&rdquo;</p>
													</blockquote>
												</div>
											</div>
										</div>
									</div> 
								@endforeach
							</div>
		
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- End Testimonial Slider -->

		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">

				<div class="sofa-img">
					<img src="assets/images/plant.png" alt="Image" class="img-fluid">
				</div>

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Decora<span>.</span></a></div>
						<p class="mb-4">Decora is your trusted partner in creating stylish and functional spaces. From modern furniture to timeless designs, we bring comfort and elegance to every corner of your home.</p>

						<ul class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">




						</div>
					</div>

				</div>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
						Designed with love by <a>3Bytes</a>
						</div>
					</div>
				</div>

			</div>
		</footer>
		<!-- End Footer Section -->	

		<!-- Pop Up Untuk PROFILE -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content border-0 shadow-lg" style="background-color: #9CBA7F; color: #f5f6f7;">
					<div class="modal-header" style="background-color: #90b56d; border-bottom: 1px solid #444;">
						<h5 class="modal-title" id="userModalLabel">LOGIN</h5>
						<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body text-center">
						<p class="mb-4 fs-5">Welcome to your user menu! Select an option below:</p>
						<ul class="list-unstyled">
							<li>
								<a href="/login" class="btn w-100" style="background-color:rgb(203, 112, 112); color: #fff; border: none;">
									<i class="bi bi-box-arrow-right me-2"></i> Login
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
