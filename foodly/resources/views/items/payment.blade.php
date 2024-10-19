<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('assets/CSS/payment.css') }}" />

<style>
    .hidden {
      display: none;
    }
  </style>
</head>
<body>

  <h2 id="bill">Billing</h2>
  <div class="row">
    <div class="col-75">
      <div class="container">
        <form>
          <br>
          <label>
            <input type="radio" name="payment-method" value="credit-card" checked> Credit Card
            <input type="radio" name="payment-method" value="cash-on-delivery"> Paiement when recieving
          </label>

          <div class="row" id="credit-card-form">
            <div class="col-50">
              <h3>Billing Address</h3>
              <label for="fname">Full Name</label>
              <input type="text" id="fname" name="firstname" placeholder="Eslam mohamed Ali">
              <label for="email">Email</label>
              <input type="text" id="email" name="email" placeholder="es@example.com">
              <label for="adr"><i class="fa fa-address-card-o"></i>Address</label>
              <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
              <label for="phone">Phone Number</label>
              <input type="text" id="phone" placeholder="0111111111" name="phone">
            </div>

            <div class="col-50">
              <h3>Payment Method</h3>
              <label for="fname">Accepted Cards</label>
              <img style="width:50px"  src="{{ url('asset/images/large-preview.jpg')}}" alt="">
              <img style="width:50px"  src="{{ url('asset/images/DSFS.jpg')}}" alt="">

              <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
              </div>
              <label for="cname">Name on Card</label>
              <input type="text" id="cname" name="cardname" placeholder="Eslam Mohamed Ali">
              <label for="ccnum">Credit card number</label>
              <input type="text" id="ccnum" name="cardnumber" placeholder="xxxx-xxxx-xxxx-xxxx">
              <label for="expmonth">Exp Month</label>
              <input type="text" id="expmonth" name="expmonth" placeholder="September">
              <div class="row">
                <div class="col-50">
                  <label for="expyear">Exp Year</label>
                  <input type="text" id="expyear" name="expyear" placeholder="2026">
                </div>
                <div class="col-50">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" name="cvv" placeholder="352">
                </div>
              </div>
            </div>
          </div>

          <div class="row hidden" id="cash-on-delivery-form">
            <div class="col-50">
              <h3>Billing Address</h3>
              <label for="fname">Full Name</label>
              <input type="text" id="fname" name="firstname" placeholder="Eslam mohamed Ali">
              <label for="email">Email</label>
              <input type="text" id="email" name="email" placeholder="es@example.com">
              <label for="adr"><i class="fa fa-address-card-o"></i>Address</label>
              <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
              <label for="phone">Phone Number</label>
              <input type="text" id="phone" placeholder="0111111111" name="phone">
            </div>


          </div>

          <input type="submit" value="Continue to checkout" class="btn">
        </form>
      </div>
    </div>
  </div>



</body>
<script src="{{ asset('assets/js/payment.js')}}"></script>

</html>
