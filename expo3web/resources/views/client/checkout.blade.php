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
							<a class="nav-link" href="/client">Home</a>
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
								<h1>Checkout</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		<div class="untree_co-section">
		    <div class="container">
		      <div class="row mb-5">
		        <div class="col-md-12">
		          <div class="border p-4 rounded" role="alert">
		            Returning customer? <a href="/login">Click here</a> to login
		          </div>
		        </div>
		      </div>
		      <div class="row">
		        <div class="col-md-6 mb-5 mb-md-0">
		          <h2 class="h3 mb-3 text-black">Billing Details</h2>
		          <div class="p-3 p-lg-5 border bg-white">
		            <div class="form-group">
		              <label for="c_country" class="text-black">Country <span class="text-danger">*</span></label>
		              <select id="c_country" class="form-control">
		                <option value="1">Select a country</option>    
		                <option value="2">bangladesh</option>    
		                <option value="3">Algeria</option>    
		                <option value="4">Afghanistan</option>    
		                <option value="5">Ghana</option>    
		                <option value="6">Albania</option>    
		                <option value="7">Bahrain</option>    
		                <option value="8">Colombia</option>    
		                <option value="9">Dominican Republic</option>    
		              </select>
		            </div>
		            <div class="form-group row">
		              <div class="col-md-6">
		                <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="c_fname" name="c_fname">
		              </div>
		              <div class="col-md-6">
		                <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="c_lname" name="c_lname">
		              </div>
		            </div>

		            <div class="form-group row">
		              <div class="col-md-12">
		                <label for="c_companyname" class="text-black">Company Name </label>
		                <input type="text" class="form-control" id="c_companyname" name="c_companyname">
		              </div>
		            </div>

		            <div class="form-group row">
		              <div class="col-md-12">
		                <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Street address">
		              </div>
		            </div>

		            <div class="form-group mt-3">
		              <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
		            </div>

		            <div class="form-group row">
		              <div class="col-md-6">
		                <label for="c_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="c_state_country" name="c_state_country">
		              </div>
		              <div class="col-md-6">
		                <label for="c_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
		              </div>
		            </div>

		            <div class="form-group row mb-5">
		              <div class="col-md-6">
		                <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="c_email_address" name="c_email_address">
		              </div>
		              <div class="col-md-6">
		                <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number">
		              </div>
		            </div>

		            <div class="form-group">
		              <label for="c_create_account" class="text-black" data-bs-toggle="collapse" href="#create_an_account" role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox" value="1" id="c_create_account"> Create an account?</label>
		              <div class="collapse" id="create_an_account">
		                <div class="py-2 mb-4">
		                  <p class="mb-3">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
		                  <div class="form-group">
		                    <label for="c_account_password" class="text-black">Account Password</label>
		                    <input type="email" class="form-control" id="c_account_password" name="c_account_password" placeholder="">
		                  </div>
		                </div>
		              </div>
		            </div>


		            <div class="form-group">
		              <label for="c_ship_different_address" class="text-black" data-bs-toggle="collapse" href="#ship_different_address" role="button" aria-expanded="false" aria-controls="ship_different_address"><input type="checkbox" value="1" id="c_ship_different_address"> Ship To A Different Address?</label>
		              <div class="collapse" id="ship_different_address">
		                <div class="py-2">

		                  <div class="form-group">
		                    <label for="c_diff_country" class="text-black">Country <span class="text-danger">*</span></label>
		                    <select id="c_diff_country" class="form-control">
		                      <option value="1">Select a country</option>    
		                      <option value="2">bangladesh</option>    
		                      <option value="3">Algeria</option>    
		                      <option value="4">Afghanistan</option>    
		                      <option value="5">Ghana</option>    
		                      <option value="6">Albania</option>    
		                      <option value="7">Bahrain</option>    
		                      <option value="8">Colombia</option>    
		                      <option value="9">Dominican Republic</option>    
		                    </select>
		                  </div>


		                  <div class="form-group row">
		                    <div class="col-md-6">
		                      <label for="c_diff_fname" class="text-black">First Name <span class="text-danger">*</span></label>
		                      <input type="text" class="form-control" id="c_diff_fname" name="c_diff_fname">
		                    </div>
		                    <div class="col-md-6">
		                      <label for="c_diff_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
		                      <input type="text" class="form-control" id="c_diff_lname" name="c_diff_lname">
		                    </div>
		                  </div>

		                  <div class="form-group row">
		                    <div class="col-md-12">
		                      <label for="c_diff_companyname" class="text-black">Company Name </label>
		                      <input type="text" class="form-control" id="c_diff_companyname" name="c_diff_companyname">
		                    </div>
		                  </div>

		                  <div class="form-group row  mb-3">
		                    <div class="col-md-12">
		                      <label for="c_diff_address" class="text-black">Address <span class="text-danger">*</span></label>
		                      <input type="text" class="form-control" id="c_diff_address" name="c_diff_address" placeholder="Street address">
		                    </div>
		                  </div>

		                  <div class="form-group">
		                    <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
		                  </div>

		                  <div class="form-group row">
		                    <div class="col-md-6">
		                      <label for="c_diff_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
		                      <input type="text" class="form-control" id="c_diff_state_country" name="c_diff_state_country">
		                    </div>
		                    <div class="col-md-6">
		                      <label for="c_diff_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
		                      <input type="text" class="form-control" id="c_diff_postal_zip" name="c_diff_postal_zip">
		                    </div>
		                  </div>

		                  <div class="form-group row mb-5">
		                    <div class="col-md-6">
		                      <label for="c_diff_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
		                      <input type="text" class="form-control" id="c_diff_email_address" name="c_diff_email_address">
		                    </div>
		                    <div class="col-md-6">
		                      <label for="c_diff_phone" class="text-black">Phone <span class="text-danger">*</span></label>
		                      <input type="text" class="form-control" id="c_diff_phone" name="c_diff_phone" placeholder="Phone Number">
		                    </div>
		                  </div>

		                </div>

		              </div>
		            </div>

		            <div class="form-group">
		              <label for="c_order_notes" class="text-black">Order Notes</label>
		              <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Write your notes here..."></textarea>
		            </div>

		          </div>
		        </div>
		        <div class="col-md-6">

					<div class="row mb-5">
						<div class="col-md-12">
						  <h2 class="h3 mb-3 text-black">Coupon Code</h2>
						  <div class="p-3 p-lg-5 border bg-white">
							<label for="coupon_code" class="text-black mb-3">Enter your coupon code if you have one</label>
							<form id="coupon-form">
							  <div class="input-group w-75 couponcode-wrap">
								<input type="text" class="form-control me-2" id="coupon_code" name="coupon_code" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2">
								<div class="input-group-append">
								  <button class="btn btn-black btn-sm" type="submit" id="button-addon2">Apply</button>
								</div>
							  </div>
							</form>
							<div id="coupon-message"></div>
						  </div>
						</div>
					  </div>

				  <div class="row mb-5">
					<div class="col-md-12">
						<h2 class="h3 mb-3 text-black">Your Order</h2>
						<div class="p-3 p-lg-5 border bg-white">
							<table class="table site-block-order-table mb-5">
								<thead>
									<th>Product</th>
									<th>Total</th>
								</thead>
								<tbody>
									@foreach ($cart as $item)
										<tr>
											<td>{{ $item['name'] }} <strong class="mx-2">x</strong> {{ $item['quantity'] }}</td>
											<td>Rp.{{ number_format($item['price'] * $item['quantity'], 2) }}</td>
										</tr>
									@endforeach
									<tr>
										<td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
										<td class="text-black">Rp.{{ number_format($subtotal, 2) }}</td>
									</tr>
									<tr>
										<td class="text-black font-weight-bold"><strong>Order Total</strong></td>
										<td class="text-black font-weight-bold"><strong>Rp.{{ number_format($total, 2) }}</strong></td>
									</tr>
									<tr>
										<td class="text-black font-weight-bold"><strong>Coupon Discount</strong></td>
										<td class="text-black font-weight-bold" id="coupon_discount">Rp.0.00</td>
									</tr>
								</tbody>
							</table>
				
							<div class="border p-3 mb-3">
								<h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>
								<div class="collapse" id="collapsebank">
									<div class="py-2">
										<p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
									</div>
								</div>
							</div>
				
							<div class="border p-3 mb-3">
								<h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>
								<div class="collapse" id="collapsecheque">
									<div class="py-2">
										<p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
									</div>
								</div>
							</div>
				
							<div class="border p-3 mb-5">
								<h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>
								<div class="collapse" id="collapsepaypal">
									<div class="py-2">
										<p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
									</div>
								</div>
							</div>
				
							<div class="form-group">
								<a href="/thankyou">
								<button type="button" class="btn btn-black btn-lg py-3 btn-block" id="place-order-btn">Place Order</button>
								</a>
							</div>
				
						</div>
					</div>
				</div>

		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">
						<h3>Leave a Review</h3>
						<form action="{{ route('reviews.store') }}" method="POST">
							@csrf
							<label for="name">Name:</label>
							<input type="text" id="name" name="name" required>
							
							<label for="comment">Comment:</label>
							<textarea id="comment" name="comment" required></textarea>
							
							<button type="submit">Submit</button>
						</form>
			</div>
		</footer>
		<!-- End Footer Section -->	


		<script src="assets/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/tiny-slider.js"></script>
		<script src="assets/js/custom.js"></script>
		<script >
		
		document.getElementById('coupon-form').addEventListener('submit', function (e) {
    	e.preventDefault();
    let couponCode = document.getElementById('coupon_code').value;

    fetch("{{ route('apply.coupon') }}", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        body: JSON.stringify({ coupon_code: couponCode })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            document.getElementById('coupon-message').textContent = data.message;
            document.getElementById('coupon_discount').textContent = `Rp.${data.discount}`;
            document.getElementById('order_total').textContent = `Rp.${data.new_total}`;
        } else {
            document.getElementById('coupon-message').textContent = data.message;
        }
    })
    .catch(error => {
        console.error('Error applying coupon:', error);
    });
	});
    // Make AJAX request to apply coupon
    fetch('/apply-coupon', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ coupon_code: couponCode })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Show coupon discount and updated total
            document.getElementById('coupon_row').style.display = 'table-row';
            document.getElementById('coupon_discount').innerText = `$${data.discount.toFixed(2)}`;
            document.getElementById('order_total').innerText = `$${data.new_total.toFixed(2)}`;

            // Show success message
            document.querySelector('#coupon_message').innerHTML = data.message;
        } else {
            // Show error message if invalid coupon
            document.querySelector('#coupon_message').innerHTML = data.message;
        }
    })
    .catch(error => {
        console.error('Error applying coupon:', error);
    });

	document.getElementById('place-order-btn').addEventListener('click', function () {
    // Ambil data dari form dan buat data pesanan
    const orderData = {
        first_name: document.getElementById('c_fname').value,
        last_name: document.getElementById('c_lname').value,
        address: document.getElementById('c_address').value,
        phone: document.getElementById('c_phone').value,
        email: document.getElementById('c_email_address').value,
        total_amount: {{ $total }},
        cart_items: @json($cart),
    };

    // Kirimkan data ke server
    fetch("{{ route('place.order') }}", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        body: JSON.stringify(orderData)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Tindakan jika pemesanan berhasil
            alert('Order placed successfully!');
        } else {
            // Tindakan jika terjadi error
            alert('There was an error placing your order.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Something went wrong!');
    });
});

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('place-order-btn').addEventListener('click', function () {
        // Your order handling code
    });
});




		</script>
	</body>

</html>
