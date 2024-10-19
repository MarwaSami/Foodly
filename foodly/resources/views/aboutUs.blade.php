@extends('layouts.main')
@section('head')

    <link rel="stylesheet" href={{asset('assets/css/about.css')}}>

@section('content')
<body>

    <!-- start of about us div -->
    <div class="head">
        <!-- <h1>About Us</h1> -->
        <p>We are passionate about delivering high-quality meals at a great price, filled with love.</p>
    </div>
    <!-- end of about us div -->


    <!-- start of hero section -->
    <div class="container">
        <!-- <section class="about"> -->
        <div class="img">
            <img src="{{asset('assets/images/contact/aboutImg.jpg')}}" alt="about us">
        </div>
        <div class="content">
            <h2>Savor the passion!</h2>
            <p>We are driven by a fiery passion to bring you an unforgettable dining experience. Our relentless
                dedication to excellence shines through every meticulously prepared dish. From the finest
                ingredients to the skillful artistry in presentation, we ensure that each meal is a culinary
                masterpiece. Our commitment extends beyond just taste; we strive to make our meals accessible to all
                by offering them at an incredible value. With every bite, you'll savor the love and passion that we
                pour into creating these high-quality, affordable meals.</p>
            <!-- <a href="" class="more">Read More</a> -->
        </div>
    </div>

    <!-- start team -->
    <div class="team">
        <h1>Our<span>Team</span></h1>

        <div class="team_box">
            <div class="profile">
                <img src="{{asset('assets/Images/contact/Samuel.JPG')}}">

                <div class="info">
                    <h2 class="name">Samuel</h2>
                    <p class="bio">Programmer graduated from ITI Track Software Development</p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>

                </div>

            </div>

            <div class="profile">
                <img src="{{asset('assets/Images/contact/Marwa.JPG')}}">

                <div class="info">
                    <h2 class="name">Marwa</h2>
                    <p class="bio">Programmer graduated from ITI Track Software Development</p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>

                </div>

            </div>

            <div class="profile">
                <img src="{{asset('assets/Images/contact/Ahmed.JPG')}}">

                <div class="info">
                    <h2 class="name">Ahmed</h2>
                    <p class="bio">Programmer graduated from ITI Track Software Development</p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>

                </div>

            </div>

            <div class="profile">
                <img src="{{asset('assets/Images/contact/Iman.JPG')}}">

                <div class="info">
                    <h2 class="name">Iman</h2>
                    <p class="bio">Programmer graduated from ITI Track Software Development</p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>

                </div>

            </div>

            <div class="profile">
                <img src="{{asset('assets/Images/contact/shalaly.jpg')}}">

                <div class="info">
                    <h2 class="name">Mahmoud</h2>
                    <p class="bio">Programmer graduated from ITI Track Software Development</p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- end team -->
</body>
@endsection

