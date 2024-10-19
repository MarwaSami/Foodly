@extends('layouts.main')
@section('head')

    <link rel="stylesheet" href={{asset('assets/css/contact.css')}}>

@section('content')
<body>

    <section id="section-wrapper">
        <div class="box-wrapper">
            <div class="info-wrap" style="background-image: url('{{ asset('assets/Images/contact/contactUS.jpg') }}'); background-size: cover; background-repeat: no-repeat; background-position: center; min-height: 200px;">

                <h2 class="info-title">Keep in touch</h2>
                <h3 class="info-sub-title">Feel free to text us. Our team will get back to you within 24 hours</h3>
                <ul class="info-details">

                    <div class="phone">
                        <li>
                            <i class="fas fa-phone-alt"></i>
                            <span>Phone:</span> <a href="tel:+ 1235 2355 98">+ 3234234234</a>
                        </li>
                        <li>
                            <i class="fas fa-paper-plane"></i>
                            <span>Email:</span> <a href="mailto:info@yoursite.com">info@oursite.com</a>
                        </li>
                    </div>
                </ul>
                <ul class="social-icons">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>

                </ul>
            </div>
            <div class="form-wrap">
                <form action="{{ url('contact_mail') }}" method="POST">
                    {{  csrf_field() }}
                    <h2 class="form-title">Send us a message</h2>
                    <div class="form-fields">
                        <div class="form-group">
                            <input type="text" class="fname" placeholder="First Name" name="name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="lname" placeholder="Last Name" name="lname" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="email"  placeholder=" Your Email" name="email"  required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="phone"   placeholder="Phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" placeholder="Write your message" required ></textarea>
                        </div>
                    </div>
                    <input type="submit" value="Send Message" class="submit-button">
                </form>
            </div>
        </div>
    </section>
</body>

@endsection


