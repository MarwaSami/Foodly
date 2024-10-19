
@extends('layouts.main')
@section('content')
<body>
    <div class="cont">
    <header class="StepHeader">
        <div class="Steps">
            <img src="Assets/Images/welcome.gif" border="0" alt="animated-welcome-image-0215" />
            <button id="ShowSteps" class="btn btn-primary rounded-5" onclick="ShowSteps()">Learn How To Order
            </button>
        </div>
        <div class="Slider">
            <div id="Gallery" class="carousel slide"  data-bs-ride="carousel">
                    <!-- carousel-indictios -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#Gallery" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#Gallery" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#Gallery" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#Gallery" data-bs-slide-to="3" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#Gallery" data-bs-slide-to="4" aria-label="Slide 3"></button>
                    </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Assets/Images/Steps/0.PNG" class="img-fluid" alt="" srcset="">
                        <p id="StepText">Select Your Menu</p>
                        <button id="HideSteps" class="btn btn-primary rounded-5" onclick="HideSteps()">Close Slider
                        </button>
                    </div>
                    <div class="carousel-item">
                        <img src="Assets/Images/Steps/1.PNG" alt="" srcset="">
                        <p id="StepText2">Choose Your Dish and its size</p>
                        <button id="HideSteps" class="btn btn-primary rounded-5" onclick="HideSteps()">Close Slider
                        </button>
                    </div>
                    <div class="carousel-item">
                        <img src="Assets/Images/Steps/2.PNG" alt="" srcset="">
                        <p id="StepText3">Confirm Your order or Return</p>
                        <button id="HideSteps" class="btn btn-primary rounded-5" onclick="HideSteps()">Close Slider
                        </button>
                    </div>
                    <div class="carousel-item">
                        <img src="Assets/Images/Steps/3.PNG" alt="" srcset="">
                        <p id="StepText4"> Your Dish is added to bill you can remove or Confirm it</p>
                        <button id="HideSteps" class="btn btn-primary rounded-5" onclick="HideSteps()">Close Slider
                        </button>
                    </div>
                    <div class="carousel-item">
                        <img src="Assets/Images/Steps/4.PNG" alt="" srcset="">
                        <p id="StepText5">Your order Details that will add to cart</p>
                        <button id="HideSteps" class="btn btn-primary rounded-5" onclick="HideSteps()">Close Slider
                        </button>
                    </div>
                </div>
                <!-- carousel-controlers -->
                <button class="carousel-control-prev" type="button" data-bs-target="#Gallery" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#Gallery" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>

            </div>
        </div>
    </header>
    <nav class="NavSelection rounded-pill">
        <ul>
            @foreach ( $categories as $category)
            <li onclick="USelection(this)">{{$category->name}}</li>
            @endforeach
        </ul>
    </nav>
    <!-- <section class="UOwnDishBody"> -->
    <div class="container">
        <aside class="DishesSide">
            <section class="Dish rounded-5" id="0">
                <section class="Class"></section>
                <section class="DishDetail">
                    <div class="DishDetailCont">
                        <p class="Selected" style='color: #565656;'>Selected </p>
                        <ul class="Size">
                            <li onclick="SizeSelection(this)">Small(price is the unit price)</li>
                            <li onclick="SizeSelection(this)">Medium(price is the unit price plus 5)</li>
                            <li onclick="SizeSelection(this)">Large(price is the unit price plus 10)</li>
                        </ul>
                        <div class='Detail'>
                            <div>
                                <p>Unit Price</p>
                                <p class="Uprice">UPrice</p>
                            </div>
                            <div style='padding-left:5%;'>
                                <p>Unit Calaroius</p>
                                <p class="Ucala">Ucala </P>
                            </div>
                        </div>
                        <div class="Unity">
                            <button id="Add" class="btn btn-primary rounded-5" onclick="ADDCart(this)">ADD To Cart <i
                                    class="fa-solid fa-arrow-right fa-beat" style="color: #ffffff;"></i></button>
                        </div>
                        <div class="TotalPDiv">
                            <span> TotalPrice : </span>
                            <p class="TotalPrice">
                                TotalPrice
                            </p>
                        </div>
                    </div>
                    <div class="Order-frame">
                        <h2 class="Udish">Udish</h2>
                        <div class="TotalSizeDiv">
                            <span> Size : </span>
                            <p class="Size">Size</p>
                        </div>
                        <div class="TotalPDiv">
                            <span> TotalPrice : </span>
                            <p class="AddTPrice">
                                TotalPrice
                            </p>
                        </div>
                        <button id="Return" class="btn btn-primary rounded-5" onclick="ReCart(this)"><i
                                class="fa-solid fa-arrow-left fa-beat" style="color: #ffffff;"></i> Return</button>
                        <button id="Confirm" class="btn btn-primary rounded-5" onclick="ConToCart(this)">Confirm ADD <i
                                class="fa-solid fa-arrow-right fa-beat" style="color: #ffffff;"></i></button>
                    </div>
                </section>
            </section>
            <section class="Dish rounded-5" id="1">
                <section class="Class"></section>
                <section class="DishDetail">
                    <div class="DishDetailCont">
                        <p class="Selected" style='color: #565656;'>Selected </p>
                        <ul class="Size">
                            <li onclick="SizeSelection(this)">Small(price is the unit price)</li>
                            <li onclick="SizeSelection(this)">Medium(price is the unit price plus 5)</li>
                            <li onclick="SizeSelection(this)">Large(price is the unit price plus 10)</li>
                        </ul>
                        <div class='Detail'>
                            <div>
                                <p>Unit Price</p>
                                <p class="Uprice">UPrice</p>
                            </div>
                            <div style='padding-left:5%;'>
                                <p>Unit Calaroius</p>
                                <p class="Ucala">Ucala </P>
                            </div>
                        </div>
                        <div class="Unity">
                            <button id="Add" class="btn btn-primary rounded-5" onclick="ADDCart(this)">ADD To Cart <i
                                    class="fa-solid fa-arrow-right fa-beat" style="color: #ffffff;"></i></button>
                        </div>
                        <div class="TotalPDiv">
                            <span> TotalPrice : </span>
                            <p class="TotalPrice">
                                TotalPrice
                            </p>
                        </div>
                    </div>
                    <div class="Order-frame">
                        <h2 class="Udish">Udish</h2>
                        <div class="TotalSizeDiv">
                            <span> Size : </span>
                            <p class="Size">Size</p>
                        </div>
                        <div class="TotalPDiv">
                            <span> TotalPrice : </span>
                            <p class="AddTPrice">
                                TotalPrice
                            </p>
                        </div>
                        <button id="Return" class="btn btn-primary rounded-5" onclick="ReCart(this)"><i
                                class="fa-solid fa-arrow-left fa-beat" style="color: #ffffff;"></i> Return</button>
                        <button id="Confirm" class="btn btn-primary rounded-5" onclick="ConToCart(this)">Confirm ADD <i
                                class="fa-solid fa-arrow-right fa-beat" style="color: #ffffff;"></i></button>
                    </div>
                </section>
            </section>
            <section class="Dish rounded-5" id="2">
                <section class="Class"></section>
                <section class="DishDetail">
                    <div class="DishDetailCont">
                        <p class="Selected" style='color: #565656;'>Selected </p>
                        <ul class="Size">
                            <li onclick="SizeSelection(this)">Small(price is the unit price)</li>
                            <li onclick="SizeSelection(this)">Medium(price is the unit price plus 5)</li>
                            <li onclick="SizeSelection(this)">Large(price is the unit price plus 10)</li>
                        </ul>
                        <div class='Detail'>
                            <div>
                                <p>Unit Price</p>
                                <p class="Uprice">UPrice</p>
                            </div>
                            <div style='padding-left:5%;'>
                                <p>Unit Calaroius</p>
                                <p class="Ucala">Ucala </P>
                            </div>
                        </div>
                        <div class="Unity">
                            <button id="Add" class="btn btn-primary rounded-5" onclick="ADDCart(this)">ADD To Cart <i
                                    class="fa-solid fa-arrow-right fa-beat" style="color: #ffffff;"></i></button>
                        </div>
                        <div class="TotalPDiv">
                            <span> TotalPrice : </span>
                            <p class="TotalPrice">
                                TotalPrice
                            </p>
                        </div>
                    </div>
                    <div class="Order-frame">
                        <h2 class="Udish">Udish</h2>
                        <div class="TotalSizeDiv">
                            <span> Size : </span>
                            <p class="Size">Size</p>
                        </div>
                        <div class="TotalPDiv">
                            <span> TotalPrice : </span>
                            <p class="AddTPrice">
                                TotalPrice
                            </p>
                        </div>
                        <button id="Return" class="btn btn-primary rounded-5" onclick="ReCart(this)"><i
                                class="fa-solid fa-arrow-left fa-beat" style="color: #ffffff;"></i> Return</button>
                        <button id="Confirm" class="btn btn-primary rounded-5" onclick="ConToCart(this)">Confirm ADD <i
                                class="fa-solid fa-arrow-right fa-beat" style="color: #ffffff;"></i></button>
                    </div>
                </section>
            </section>
            <section class="Dish rounded-5" id="3">
                <section class="Class"></section>
                <section class="DishDetail">
                    <div class="DishDetailCont">
                        <p class="Selected" style='color: #565656;'>Selected </p>
                        <ul class="Size">
                            <li onclick="SizeSelection(this)">Small(price is the unit price)</li>
                            <li onclick="SizeSelection(this)">Medium(price is the unit price plus 5)</li>
                            <li onclick="SizeSelection(this)">Large(price is the unit price plus 10)</li>
                        </ul>
                        <div class='Detail'>
                            <div>
                                <p>Unit Price</p>
                                <p class="Uprice">UPrice</p>
                            </div>
                            <div style='padding-left:5%;'>
                                <p>Unit Calaroius</p>
                                <p class="Ucala">Ucala </P>
                            </div>
                        </div>
                        <div class="Unity">
                            <button id="Add" class="btn btn-primary rounded-5" onclick="ADDCart(this)">ADD To Cart <i
                                    class="fa-solid fa-arrow-right fa-beat" style="color: #ffffff;"></i></button>
                        </div>
                        <div class="TotalPDiv">
                            <span> TotalPrice : </span>
                            <p class="TotalPrice">
                                TotalPrice
                            </p>
                        </div>
                    </div>
                    <div class="Order-frame">
                        <h2 class="Udish">Udish</h2>
                        <div class="TotalSizeDiv">
                            <span> Size : </span>
                            <p class="Size">Size</p>
                        </div>
                        <div class="TotalPDiv">
                            <span> TotalPrice : </span>
                            <p class="AddTPrice">
                                TotalPrice
                            </p>
                        </div>
                        <button id="Return" class="btn btn-primary rounded-5" onclick="ReCart(this)"><i
                                class="fa-solid fa-arrow-left fa-beat" style="color: #ffffff;"></i> Return</button>
                        <button id="Confirm" class="btn btn-primary rounded-5" onclick="ConToCart(this)">Confirm ADD <i
                                class="fa-solid fa-arrow-right fa-beat" style="color: #ffffff;"></i></button>
                    </div>
                </section>
            </section>
        </aside>
        <aside class="BillSide">
            <div class="PrepareUDish">
                <img src="Assets/Images/prepareYour Own dish.jpg" class="rounded-5" style="width: 100%; " alt=""
                    srcset="">
            </div>
            <div class="showBill">
                <div class="Bill">

                </div>
                <div class="Order-frame2">

                </div>
            </div>
            <button id="showBillButt" class="btn btn-primary rounded-5" onclick="showBill()">show Bill </button>
        </aside>
    </div>
    </div>
</body>
<script src="Assets/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
@endsection
    @extends('UownDish.UOwnDishJs');
    <!-- </section> -->


