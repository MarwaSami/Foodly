@extends('layouts.main')
@section('content')

<link rel="stylesheet" href="{{ asset('assets/CSS/items.css') }}" />
<body>
    <div class="body">
    <header class="Navmenu">
        <h1>Our Menu</h1>
        <nav class="navm">
          <ul >
         <li><a href="{{ route('items') }}">ALL</a></li>
          <li><a href="{{ route('pizza') }}">Pizza</a></li>
          <li><a href="{{ route('meal') }}">Meals</a></li>
            <li><a href="{{ route('pasta') }}">pasta</a></li>
            <li><a href="{{ route('sandwiches') }}">Sandwiches</a></li>
            <li><a href="{{ route('drinks') }}">Drinks</a></li>
            <li><a href="{{ route('desserts') }}">Desserts</a></li>
          </ul>
        </nav>
      </header>
      <div data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions">
        <button>Show Card</button>
      </div>
      <div class="offcanvas offcanvas-start cart-container" data-bs-scroll="true" tabindex="-1"
           id="offcanvasWithBothOptions">
            <div class="offcanvas-header">
           <h2>Cart</h2>
            </div>
           <table class="offcanvas-body">
             <thead>
               <tr>
               <th><strong>Item</strong></th>
               <th><strong>Price</strong></th>
             </tr>
             </thead>
             <tbody id="carttable">
             </tbody>
           </table>
           <hr>
           <table id="carttotals">
             <tr>
               <td><strong>Items</strong></td>
               <td><strong>Total</strong></td>
             </tr>
             <tr>
               <td> Num<span id="itemsquantity">0</span></td>

               <td> EG<span id="total">0</span></td>
             </tr></table>


           <div class="cart-buttons">
             <button id="emptycart">Empty Cart</button>
             <button id="checkout" onclick="gotopayment()">Checkout</button>
           </div>
         </div>
 </div>
 </div>
</div>
    <div class="container">
    <div id="alerts"></div>
   <div class="productcont">
   @foreach($items as $item)

<div class="product">
    <h3 class="productname">{{ $item->name }}</h3>
    <img src="http://localhost/foodly/Dashboard/storage/items/{{$item->img}}" />    <p>{{ $item->description }}</p>
    <p class="price">EG {{ $item->price }}</p>
    <button class="addtocart">Add To Cart</button>
</div>
@endforeach
</div>


</body>
<link >

<script src="{{ asset('assets/js/items.js')}}"></script>
<script src="assets/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
{{-- <script> function gotopayment(){
    window.location.href = "{{ route('payment') }}";
 };   </script> --}}


</html>


@endsection
