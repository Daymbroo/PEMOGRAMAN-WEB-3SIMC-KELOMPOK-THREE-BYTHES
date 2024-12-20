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
  <title>{{ $produk->nama }} - Product Details</title>
</head>
<body>

  <!-- Start Header -->
  <header class="bg-light py-3">
    <div class="container">
      <h1 class="text-center">Product Details</h1>
    </div>
  </header>
  <!-- End Header -->

  <!-- Start Product Details Section -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <img src="{{ url('image/' . $produk->foto) }}" class="img-fluid" alt="{{ $produk->nama }}">
      </div>
      <div class="col-md-6">
        <h2 class="product-title">{{ $produk->nama }}</h2>
        <strong class="product-price">Rp. {{ number_format($produk->harga_jual, 0, ',', '.') }}</strong>
        <p class="mt-3">{{ $produk->deskripsi }}</p>
      </div>
    </div>
  </div>
  <!-- End Product Details Section -->

  <!-- Start Footer -->
  <footer class="bg-light py-3">
    <div class="container text-center">
      <p>&copy; {{ date('Y') }} Your Company Name. All rights reserved.</p>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- Bootstrap JS and dependencies -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/tiny-slider.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>