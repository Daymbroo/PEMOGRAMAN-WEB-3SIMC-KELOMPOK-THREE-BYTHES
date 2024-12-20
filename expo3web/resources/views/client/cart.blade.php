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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="assets/css/tiny-slider.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
</head>

<body>

  <!-- Start Header/Navigation -->
  <div class="hero">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5">
          <div class="intro-excerpt">
            <h1>Cart</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="untree_co-section before-footer-section">
    <div class="container">
      <div class="row mb-5">
        <form class="col-md-12" method="POST" action="{{ route('cart.update') }}">
          @csrf
          <div class="site-blocks-table">
            <table class="table">
              <thead>
                <tr>
                  <th class="product-thumbnail">Image</th>
                  <th class="product-name">Product</th>
                  <th class="product-price">Price</th>
                  <th class="product-quantity">Quantity</th>
                  <th class="product-total">Total</th>
                  <th class="product-remove">Remove</th>
                </tr>
              </thead>
              <tbody>
                @php $total = 0; @endphp
                @foreach(session('cart', []) as $id => $item)
                  <tr>
                    <td class="product-thumbnail">
                      <img src="{{ $item['image'] }}" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">{{ $item['name'] }}</h2>
                    </td>
                    <td>${{ number_format($item['price'], 2) }}</td>
                    <td>
                      <div class="input-group mb-3 d-flex align-items-center" style="max-width: 120px;">
                        <button class="btn btn-outline-black decrease" type="button" data-id="{{ $id }}">−</button>
                        <input type="number" class="form-control text-center" name="quantity[{{ $id }}]" value="{{ $item['quantity'] }}" min="1">
                        <button class="btn btn-outline-black increase" type="button" data-id="{{ $id }}">+</button>
                      </div>
                    </td>
                    <td>${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                    <td><a href="{{ route('cart.remove', $id) }}" class="btn btn-black btn-sm">X</a></td>
                  </tr>
                  @php $total += $item['price'] * $item['quantity']; @endphp
                @endforeach
              </tbody>
            </table>
          </div>

          <div class="row mb-5">
            <div class="col-md-6 mb-3 mb-md-0">
              <a href="/shop" class="btn btn-outline-black btn-sm btn-block">Continue Shopping</a>
            </div>
          </div>
        </form>
      </div>

      <div class="row">
        <div class="col-md-6 pl-5">
          <div class="row justify-content-end">
            <div class="col-md-7">
              <div class="row">
                <div class="col-md-12 text-right border-bottom mb-5">
                  <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <span class="text-black">Subtotal</span>
                </div>
                <div class="col-md-6 text-right">
                  <strong class="text-black">${{ $total }}</strong>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-6">
                  <span class="text-black">Total</span>
                </div>
                <div class="col-md-6 text-right">
                  <strong class="text-black">${{ $total }}</strong>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='/checkout'">Proceed To Checkout</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Start Footer Section -->
  <footer class="footer-section">
    <div class="container relative">
      <!-- Content here (no changes needed for footer) -->
    </div>
  </footer>
  <!-- End Footer Section -->

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/tiny-slider.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/cartButton.js"></script>

  <script>
    document.querySelectorAll('.increase').forEach(button => {
      button.addEventListener('click', function() {
        const input = this.closest('tr').querySelector('input');
        input.value = parseInt(input.value) + 1;
        input.form.submit();
      });
    });

    document.querySelectorAll('.decrease').forEach(button => {
      button.addEventListener('click', function() {
        const input = this.closest('tr').querySelector('input');
        if (input.value > 1) {
          input.value = parseInt(input.value) - 1;
          input.form.submit();
        }
      });
    });
  </script>
</body>

</html>
