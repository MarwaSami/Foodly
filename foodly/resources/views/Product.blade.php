
@extends('layouts.main')
@section('content')

<body>

    <div class="Body">
        <div class="BorderBody">
        <div class="ContentProd">
            <div class="ContParag">
                <div class="ContWords">
                    <h2>Welcome</h2>
                </div>
                <img src="assets/images/Product/Order.png">
                <p>We understand the significance of health food to our bodies and the value of our mothers' food, but we also understand how challenging it may be for expatriates  to obtain due to time restrictions. We take great effort to launch our website with a comprehensive selection of healthy meals as a consequence, ensuring that you never miss one. </p>
            </div>
        </div>

        <div class="ProdBorder">
            @foreach ($categories as $category)
            {{-- <div>
                {{$category->name}}
            </div> --}}
            <div class="Proddiv1" style="background-image: url('assets/images/Product/{{$category->name}}.jpg')" onmouseenter="showProddet(this)" onmouseleave="delProddet(this)" id="{{$category->name}}">
            </div>
            @endforeach

        </div>
    </div>

</body>
@endsection
<script src="assets/js/Product.js"></script>
</html>
