
@extends('layouts.main')
@section('content')

<body>
    <!-- end navbar -->

    <!-- start landing -->
    <section class="landd">
        <div class="landing">
            <div class="landing-text">
                <h2>Welcome To <br /><span>Foodly</span></h2>
                <p class="apout">
                    Dear student <br />
                    You are in your home Ask and wish <br />
                    We have eaten home and healthy at a competitive price, eat on us and
                    succeed on you
                </p>
                <div class="main_btn">
                    <a href="#">Order Now</a>
                    <i class="fa-solid fa-angle-right"></i>
                </div>
            </div>
        </div>
    </section>
    <!-- end landing -->

    <!-- start about 2 -->
    <section class="container-d">
        <div class="left-d"></div>
        <img style="width: 500px;" src="{{ url('assets/images/delivery-guy-2.svg')}}" alt="" />
        <div class="right-d"></div>
        <div class="about-d">
            <div>
                <h2>Take a look at the benefits we offer for you</h2>
                <p>
                    Good service means a friendly, welcoming service. A restaurant owner
                    should not merely strive to avoid bad service
                </p>
            </div>
            <div class="d-card-d">
                <div class="card-d">
                    <img src="{{ url('assets/images/car-icon.svg')}}" alt="" />
                    <h4>Free Home Delivary</h4>
                    <span>For all orders over 500 EGP</span>
                </div>
                <div class="card-d">
                    <img src="{{ url('assets/images/dollar-icon.svg')}}" alt="" />
                    <h4>Return & Refund</h4>
                    <span>Money Back Guarantee</span>
                </div>
                <div class="card-d">
                    <img src="{{ url('assets/images/security-icon.svg')}}" alt="" />
                    <h4>Secure Payment</h4>
                    <span>100% Secure Payment</span>
                </div>
                <div class="card-d">
                    <img src="{{ url('assets/images/time-icon.svg')}}" alt="" />
                    <h4>Quality Support</h4>
                    <span>Alway Online 24/7</span>
                </div>
            </div>
        </div>
    </section>
    <!-- end about 2 -->

    <!--start About-->
    <div class="about" id="About">
        <div class="about_main">
            <div class="image">
                <img src="{{ url('assets/Images/2.jpg')}}" alt=""/>
            </div>

            <div class="about_text">
                <h1><span>Why Choose</span>Us</h1>
                <p>
                    We offer a wide range of diverse and nutritious meals to cater to
                    the needs of all students. Whether you prefer light and healthy
                    snacks or delicious main courses, you will find something to suit
                    your taste with us. <br /><br />

                    We provide a user-friendly online platform for ordering meals.
                    Students can browse the menu, select their favorite items, and
                    specify their location for seamless food delivery. We prioritize
                    fast and reliable delivery service to ensure timely arrival of your
                    food.<br /><br />

                    We believe that good food should be accessible to all, which is why
                    we strive to offer affordable prices for our meals, providing
                    excellent value for your money.<br /><br />

                    We value customer satisfaction greatly. Our cooperative and
                    professional team is always ready to assist you and respond to your
                    needs and inquiries with pleasure.<br /><br />

                    We are committed to providing an excellent and convenient dining
                    experience for students. Our selection ensures quality, variety, and
                    convenience. We are enthusiastic about serving you and meeting your
                    expectations.<br /><br />
                </p>
            </div>
        </div>

        <a href="#" class="about_btn">Order Now</a>
    </div>

    <!-- end about -->



    <!--most wanted-->

    <div class="gallary" id="Gallary">
        <h1>Most<span>Wanted</span></h1>

        <div class="gallary_image_box">



    <!-- <h1>Most<span>Wanted</span></h1> -->
    @foreach ($items as $item)

            <div class="gallary_image">
                <img src="http://localhost/foodly/Dashboard/storage/items/{{$item['img']}}" />
                {{-- <img src="http://localhost:84/foodly/Dashboard/storage/{{$item['img']}}" /> --}}
                <h3>{{$item["name"]}}</h3>
                <p>{{$item["description"]}}</p>
                <a href="#" class="gallary_btn">Order Now</a>
        </div>
    @endforeach



        </div>
    </div>

    <!-- end most Wanted -->

    <!--Menu-->

    <!-- <div class="menu" id="Menu">
        <h1>Our<span>Menu</span></h1>

        <div class="menu_box">
            <div class="menu_card">

                <div class="menu_image">
                    <img src="Images/Molokhya.jpg">
                </div>

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="menu_info">
                    <h2>Molokhya</h2>
                    <p>
                        Pouring fried golden garlic over a delicious stewed Molokhya
                    </p>
                    <h3>20 EGP</h3>

                    <a href="#" class="menu_btn">Order Now</a>
                </div>

            </div>

            <div class="menu_card">

                <div class="menu_image">
                    <img src="Images/Roasted chicken.jpg">
                </div>

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="menu_info">
                    <h2>Roasted chicken</h2>
                    <p>
                        Tray of roasted chicken with potatoes and vegetables
                    </p>
                    <h3>190 EGP</h3>

                    <a href="#" class="menu_btn">Order Now</a>
                </div>

            </div>

            <div class="menu_card">

                <div class="menu_image">
                    <img src="Images/sandwiches Alexandrian Liver.jpg">
                </div>

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="menu_info">
                    <h2>sandwiches Alexandrian Liver</h2>
                    <p>
                        Alexandrian liver sandwiches with lemon
                    </p>
                    <h3>15 EGP</h3>

                    <a href="#" class="menu_btn">Order Now</a>
                </div>

            </div>

            <div class="menu_card">

                <div class="menu_image">
                    <img src="Images/Mombar.jpg">
                </div>

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="menu_info">
                    <h2>Mombar</h2>
                    <p>
                        "Mombar".It's beef sausage stuffed with rice mixture,minced meat and deep fried in oil
                    </p>
                    <h3>80 EGP</h3>

                    <a href="#" class="menu_btn">Order Now</a>
                </div>

            </div>

            <div class="menu_card">

                <div class="menu_image">
                    <img src="Images/sausage.jpg">
                </div>

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="menu_info">
                    <h2>sausage</h2>
                    <p>
                        Alexandrian sausage with the magic mixture
                    </p>
                    <h3>18 EGP</h3>

                    <a href="#" class="menu_btn">Order Now</a>
                </div>

            </div>

            <div class="menu_card">

                <div class="menu_image">
                    <img src="Images/Shakshuka.jpg">
                </div>

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="menu_info">
                    <h2>Shakshuka</h2>
                    <p>
                        Shakshuka with eggs, tomato, and parsley
                    </p>
                    <h3>25 EGP</h3>

                    <a href="#" class="menu_btn">Order Now</a>
                </div>

            </div>

            <div class="menu_card">

                <div class="menu_image">
                    <img src="Images/shawrma.jpg">
                </div>

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="menu_info">
                    <h2>chicken shawarma</h2>
                    <p>
                        Sandwich Chicken Shawerma (Egyptian)
                    </p>
                    <h3>35 EGP</h3>

                    <a href="#" class="menu_btn">Order Now</a>
                </div>

            </div>

            <div class="menu_card">

                <div class="menu_image">
                    <img src="Images/feteer.jpg">
                </div>

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="menu_info">
                    <h2>Feteer meshaltet</h2>
                    <p>
                        is flaky layered pastry. It consists of many thin layers of dough and ghee
                    </p>
                    <h3>40 EGP</h3>

                    <a href="#" class="menu_btn">Order Now</a>
                </div>

            </div>

            <div class="menu_card">

                <div class="menu_image">
                    <img src="Images/Rice with Milk.jpg">
                </div>

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="menu_info">
                    <h2>Rice with Milk</h2>
                    <p>
                        Rice with Milk in Oven
                    </p>
                    <h3>$20.00</h3>

                    <a href="#" class="menu_btn">Order Now</a>
                </div>

            </div>

            <div class="menu_card">

                <div class="menu_image">
                    <img src="Images/ME Sweet.jpg">
                </div>

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="menu_info">
                    <h2>Middle Eastern sweets</h2>
                    <p>
                        Middle Eastern sweets
                    </p>
                    <h3>110 EGP</h3>

                    <a href="#" class="menu_btn">Order Now</a>
                </div>

            </div>

            <div class="menu_card">

                <div class="menu_image">
                    <img src="Images/Herring fish.jpg">
                </div>

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="menu_info">
                    <h2>Herring fish</h2>
                    <p>
                        smoked Herring fish served with green onions, lemon, cherry tomatoes, spices, bread and Tahini sauce
                    </p>
                    <h3>60 EGP</h3>

                    <a href="#" class="menu_btn">Order Now</a>
                </div>

            </div>

            <div class="menu_card">

                <div class="menu_image">
                    <img src="Images/Meat .jpg">
                </div>

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="menu_info">
                    <h2>Meat </h2>
                    <p>
                        Meat casserole with tomatoes
                    </p>
                    <h3>220 EGP</h3>

                    <a href="#" class="menu_btn">Order Now</a>
                </div>

            </div>

        </div>

    </div> -->
    <!-- end menu -->

    <!-- start your dish -->

    <section class="mk-dish">
        <div class="mk-left">
            <h2><span>Make</span> your own dish</h2>
            <p>
                You can customize your favorite dish yourself
            </p>
            <div class="btn-dish">
                <a href="{{route('UownDish')}}">Start Now</a>
                <i class="fa-solid fa-angle-right"></i>
            </div>
        </div>

        <div class="mk-right">
            <div class="mk-card">
                <img src="{{ url('assets/images/meat-icon.svg')}}" alt="" />
                <h3>
                    Choose <br />
                    your favorite <br />
                    food
                </h3>
            </div>
            <div class="mk-card">
                <img src="{{ url('assets/images/delivery-icon.svg')}}" alt="" />
                <h3>
                    Get delivery <br />
                    at your door <br />
                    step
                </h3>
            </div>
            <div class="mk-card">
                <img src="{{ url('assets/images/phone-icon.svg')}}" alt="" />
                <h3>
                    Contact us <br />
                    for any <br />
                    question
                </h3>
            </div>
        </div>
    </section>

    <!-- end your dish -->
<!-- start package -->

<section class="package">
    <div class="l-left">
        <div id="cd1" class="card text-bg-dark">
            <img src="{{ url('assets/Images/c0.jpeg')}}" class="card-img" alt="...">
            <div id="ptext" class="card-img-overlay">
              <h5 class="card-title">Monthly subscription</h5>
              <p class="card-text">Get your food all month round.</p>
              <p class="card-text"><small>Limited offer</small></p>
            </div>
          </div>
          <div id="cd2" class="card text-bg-dark">
            <img src="{{ url('assets/Images/c1.jpg')}}" class="card-img" alt="...">
            <div id="ptext" class="card-img-overlay">
              <h5 class="card-title">Weekly subscription</h5>
              <p class="card-text">Get your food all week round.</p>
              <p class="card-text"><small>Limited offer</small></p>
            </div>
          </div>
    </div>

    <div class="l-right">
        <div class="sub">
            <h1 id="ph-1">Our<span id="ps-1">Plans</span></h1>
        </div>
        <img width="500px" src="{{ url('assets/images/delivery-guy.svg')}}" alt="" />
    </div>

</section>
<!-- end package -->

    <!--Start Review-->

    <div class="review" id="Review">
        <h1>Customer<span>Review</span></h1>

        <div class="review_box">
            <div class="review_card">
                <div class="review_profile">
                    <img src="{{ url('assets/Images/r1.jpg')}}" />
                </div>

                <div class="review_text">
                    <h2 class="name">3atef</h2>

                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <div class="review_social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                    </div>

                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Repellendus quam facere blanditiis in fugiat tempore
                        necessitatibus aliquid. Id adipisci, rem corrupti asperiores
                        distinctio delectus quae quia tenetur totam laboriosam quam. Lorem
                        ipsum, dolor sit amet consectetur adipisicing elit. Dolores soluta
                        ullam ipsa voluptates repudiandae dignissimos deleniti mollitia
                        eum. Laudantium placeat velit nemo illo pariatur. Fuga aperiam
                        impedit illo atque repellendus!
                    </p>
                </div>
            </div>

            <div class="review_card">
                <div class="review_profile">
                    <img src="{{ url('assets/Images/r2.jpg')}}" />
                </div>

                <div class="review_text">
                    <h2 class="name">balbosy</h2>

                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <div class="review_social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                    </div>

                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Repellendus quam facere blanditiis in fugiat tempore
                        necessitatibus aliquid. Id adipisci, rem corrupti asperiores
                        distinctio delectus quae quia tenetur totam laboriosam quam. Lorem
                        ipsum, dolor sit amet consectetur adipisicing elit. Dolores soluta
                        ullam ipsa voluptates repudiandae dignissimos deleniti mollitia
                        eum. Laudantium placeat velit nemo illo pariatur. Fuga aperiam
                        impedit illo atque repellendus!
                    </p>
                </div>
            </div>

            <div class="review_card">
                <div class="review_profile">
                    <img src="{{ url('assets/Images/r5.jpg')}}" />
                </div>

                <div class="review_text">
                    <h2 class="name">3mr diab</h2>

                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <div class="review_social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                    </div>

                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Repellendus quam facere blanditiis in fugiat tempore
                        necessitatibus aliquid. Id adipisci, rem corrupti asperiores
                        distinctio delectus quae quia tenetur totam laboriosam quam. Lorem
                        ipsum, dolor sit amet consectetur adipisicing elit. Dolores soluta
                        ullam ipsa voluptates repudiandae dignissimos deleniti mollitia
                        eum. Laudantium placeat velit nemo illo pariatur. Fuga aperiam
                        impedit illo atque repellendus!
                    </p>
                </div>
            </div>

            <div class="review_card">
                <div class="review_profile">
                    <img src="{{ url('assets/Images/r4.jpg')}}" />
                </div>

                <div class="review_text">
                    <h2 class="name">elalmany</h2>

                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <div class="review_social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                    </div>

                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Repellendus quam facere blanditiis in fugiat tempore
                        necessitatibus aliquid. Id adipisci, rem corrupti asperiores
                        distinctio delectus quae quia tenetur totam laboriosam quam. Lorem
                        ipsum, dolor sit amet consectetur adipisicing elit. Dolores soluta
                        ullam ipsa voluptates repudiandae dignissimos deleniti mollitia
                        eum. Laudantium placeat velit nemo illo pariatur. Fuga aperiam
                        impedit illo atque repellendus!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- end review -->

    <!-- Start Counter -->
    <div class="analys">
        <h1>Foodly<span>Analysis</span></h1>
    </div>

    <div class="wrapper">
        <div class="cou">
            <i class="fas fa-utensils"></i>
            <span class="num" data-val="400">000</span>
            <span class="text">Meals Delivered</span>
        </div>
        <div class="cou">
            <i class="fas fa-smile-beam"></i>
            <span class="num" data-val="340">000</span>
            <span class="text">Happy Customers</span>
        </div>
        <div class="cou">
            <i class="fas fa-list"></i>
            <span class="num" data-val="225">000</span>
            <span class="text">Menu Items</span>
        </div>
        <div class="cou">
            <i class="fas fa-star"></i>
            <span class="num" data-val="280">000</span>
            <span class="text">Five Stars</span>
        </div>
    </div>
    <!-- end Counter -->
</body>

@endsection




