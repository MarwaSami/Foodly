<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <link href="{{ asset('assets/CSS/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/CSS/Home.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/CSS/UownDish.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/CSS/Product.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/CSS/Reg.css') }}">
    <title>Foodly</title>
</head>
<!-- start navbar -->
<header class="main-header">
    <div class="navbar-header">
        <div class="pin">
            <p id="logo">Foodly</p>
            <ul class="navbar">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item">
                    <a class="" href="{{ route('product') }}">Foods</a>
                </li>
                <li class="nav-item"><a href="/items">Menu</a></li>
                <li class="nav-item">
                    <a class="" href="/contact_us">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="" href="/about_us">About</a>
                </li>
            </ul>
            <div class="user">
                <i class="fa-solid fa-magnifying-glass"></i>

                <a href="Menu/cart.html">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
                @if (auth()->id() == null)
                    <a href="/Ulogin">
                        <i class="fa-solid fa-user"></i>
                    </a>
                @else
                    <div id="useropt">
                        <select id="select"  class="btn btn-light">
                            <option value="name"> <p>{{ Auth::user()->name }}</p></option>
                            <option value="#">Profile</option>
                            <option value="/Ulogout"><a href='/Ulogout'>Logout</a></option>
                          </select>
                    </div>
                @endif
                <!-- <li  class="account"> <a  href="/LOGIN/Reg.html">login & Register</a></li> -->
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </div>
</header>
<script>
    function openLink(e) {
     if(e.target.value!="name")
      window.open(e.target.value, '_self');
    }

    document.getElementById('select').addEventListener('change', openLink);
  </script>
