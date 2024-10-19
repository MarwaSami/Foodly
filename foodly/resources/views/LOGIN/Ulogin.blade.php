@extends('layouts.main')
@section('content')
<div class="bodyUlogreg">
    <div class="BackG">
    <form  method="post"  action="/Uloginvalid" class="form">
        @csrf
        <h2 style="text-align: center; margin-top:2vh;">Log In </h2>
        @if (Session::has("exist"))
        <p style="color:red; text-align:center;">{{Session::get("exist")}}</p>
        @endif
        <input type="text" class="T1A2" name="email" placeholder="Email" required> <br>
        <input type="password" class="T1A2" name="password" placeholder="Enter Your password" required> <br>
        <input type="submit" value="Log In" id="ST">
        <br>
        <br>
        {{-- <div id="forgot">
        <a id="forgotLink" href="https://www.google.com">Forgot your Password?</a> <br>
    </div> --}}
        <hr>
        <p id="Or"> OR</p>
        <p id="have">Don't have an account? <a  id="Link" href="{{route('UReg')}}">Sign Up</a> </p>

    </form>
   </div>
</div>
   @endsection

