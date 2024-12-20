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
		<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="/assets/css/tiny-slider.css" rel="stylesheet">
		<link href="/assets/css/style.css" rel="stylesheet">
		<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
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
						<li class="nav-item ">
							<a class="nav-link" href="/client">Home</a>
						</li>
						<li class="active"><a class="nav-link" href="#">Shop</a></li>
						<li><a class="nav-link" href="/about">About us</a></li>
						<li><a class="nav-link" href="/contact">Contact us</a></li>
					</ul>
					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li>
							<a class="nav-link" href="/cart">
								<img src="/assets/images/cart.svg">
								<span id="cart-count" class="badge bg-primary rounded-pill">0</span>
							</a>
						</li>
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
							<h1>Shop</h1>
							<p class="mb-4">We are dedicated to creating beautiful and functional spaces that reflect your style and personality. At Decora, we combine quality craftsmanship with innovative designs to bring your dream interiors to life. Let us help you transform your space into a place you'll love.</p>
							<button class="btn btn-white-outline dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">Categories </button>
						  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<li><a class="dropdown-item" href="{{ route('client.shop') }}">All</a></li>
							<li><a class="dropdown-item" href="{{ route('shop.filter', 'guest-room') }}">Guest Room</a></li>
                        	<li><a class="dropdown-item" href="{{ route('shop.filter', 'dining-room') }}">Dining Room</a></li>
                        	<li><a class="dropdown-item" href="{{ route('shop.filter', 'bedroom') }}">Bedroom</a></li>
                        	<li><a class="dropdown-item" href="{{ route('shop.filter', 'kitchen') }}">Kitchen</a></li>
                        	<li><a class="dropdown-item" href="{{ route('shop.filter', 'outdoor') }}">Outdoor</a></li>
						  </ul>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="hero-img-wrap">
							<img src="/assets/images/sofakuningkanan.png" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- End Hero Section -->

		

		<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
		      	<div class="row">

		      		<!-- Start Column 1 -->
					  @if($produk->count() > 0)
					  @foreach($produk as $item)
						  <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
							  <a class="product-item add-to-cart"
										  data-id="{{ $item->id }}" 
										  data-price="{{ $item->harga_jual }}" 
										  data-name="{{ $item->nama }}" 
										  data-image="{{ url('image/' . $item->foto) }}">
										  <span class="icon-cross"></span>	
								  <img src="{{ url('image/' . $item->foto) }}" class="img-fluid product-thumbnail" alt="{{ $item->nama }}">
								  <h3 class="product-title">{{ $item->nama }}</h3>
								  <strong class="product-price">Rp. {{ number_format($item->harga_jual, 0, ',', '.') }}</strong>
								  
								  
							  </a>
						</div>
						@endforeach
					@else
						<p>No products found.</p>
					@endif
		      	</div>
		    </div>
		</div>
		<!-- End Column 1 --> 

		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">

				<div class="sofa-img">
					<img src="assets/images/sofa.png" alt="Image" class="img-fluid">
				</div>
		<!-- End Footer Section -->	


		<script src="/assets/js/bootstrap.bundle.min.js"></script>
		<script src="/assets/js/tiny-slider.js"></script>
		<script src="/js/custom.js"></script>
		<script>

				function addToCart(element) {
				const product = {
					id: element.getAttribute('data-id'),
					name: element.getAttribute('data-name'),
					price: element.getAttribute('data-price'),
					image: element.getAttribute('data-image'),
					quantity: 1
				};

				fetch('{{ route('cart.add') }}', {
					method: 'POST',
					headers: {
					'Content-Type': 'application/json',
					'X-CSRF-TOKEN': '{{ csrf_token() }}'
					},
					body: JSON.stringify(product)
				})
					.then(response => response.json())
					.then(data => {
					if (data.success) {
						// Update the cart count in the UI
						const cartCountElement = document.querySelector('#cart-count');
						cartCountElement.innerText = data.cart_count;
						cartCountElement.style.display = 'inline'; // Ensure it is visible
						alert('Item successfully added to cart!');
					} else {
						alert('Failed to add item to cart. Please try again.');
					}
					})
					.catch(error => {
					console.error('Error:', error);
					alert('An error occurred. Please try again.');
					});
				}

				// Add event listeners to all "Add to Cart" buttons
				document.querySelectorAll('.add-to-cart').forEach(button => {
				button.addEventListener('click', function () {
					addToCart(button);
				});
				});

				window.addEventListener('DOMContentLoaded', () => {
				fetch('{{ route('cart.count') }}', {
					method: 'GET',
					headers: {
					'X-CSRF-TOKEN': '{{ csrf_token() }}'
					}
				})
					.then(response => response.json())
					.then(data => {
					const cartCountElement = document.querySelector('#cart-count');
					cartCountElement.innerText = data.cart_count;
					cartCountElement.style.display = data.cart_count > 0 ? 'inline' : 'none'; // Show only if count > 0
					})
					.catch(error => {
					console.error('Error fetching cart count:', error);
					});
				});
			

				
				// Dropdown Category Fixes
				document.querySelectorAll('.dropdown-item').forEach(item => {
					item.addEventListener('click', () => {
						console.log('Item clicked:', item.textContent);
						// Menutup dropdown secara paksa
						const dropdown = document.querySelector('#navbarDropdown');
						const dropdownMenu = document.querySelector('.dropdown-menu');
						if (dropdown && dropdownMenu) {
							dropdownMenu.classList.remove('show');
							dropdown.setAttribute('aria-expanded', 'false');
						}
					});
				});

				document.querySelectorAll('.dropdown-item').forEach(item => {
					item.addEventListener('click', (e) => {
						e.preventDefault();
						const targetUrl = item.getAttribute('href');
						if (window.location.href === targetUrl) {
							window.location.reload();
						} else {
							window.location.href = targetUrl;
						}
					});
				});


		  </script>
	</body>

</html>
