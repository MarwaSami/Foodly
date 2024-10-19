@extends('layouts.main')
@section('content')
    <div class="bodyUlogreg">
        <div class="BackG">
            <form method="post" action="/URegadd" class="form">
                @csrf
                <h2 style="text-align: center; margin-top:2vh;"> Register </h2>
                @error('name')
                    <p style="color:red; text-align:center;">{{ $errors->first('name') }}</p>
                @enderror
                <input type="text" class="T1A2" name="name" placeholder="Name"> <br>
                @error('email')
                    <p style="color:red; text-align:center;">{{ $errors->first('email') }}</p>
                @enderror
                <input type="email" class="T1A2" name="email" placeholder="Email"> <br>
                @error('password')
                    <p style="color:red; text-align:center;">{{ $errors->first('password') }}</p>
                @enderror
                @if (Session::has('Confirmpass'))
                    <p style="color:red; text-align:center;">{{ Session::get('Confirmpass') }}</p>
                @endif
                <input type="password" class="T1A2" name="password" placeholder="Enter Your password"> <br>
                @error('ConPassword')
                    <p style="color:red; text-align:center;">{{ $errors->first('ConPassword') }}</p>
                @enderror
                <input type="password" class="T1A2" placeholder="Confirm Password" name="ConPassword"><br>
                @error('phone')
                    <p style="color:red; text-align:center;">{{ $errors->first('phone') }}</p>
                @enderror
                <input type="text" class="T1A2" name="phone" placeholder="phone"> <br>
                @error('subscription')
                    <p style="color:red; text-align:center;">{{ $errors->first('subscription') }}</p>
                @enderror
                <label for="subscription" style="text-align: center;">Subscription:</label>
                <select class="T1A2" name="subscription" id="subscription">
                    <option value="monthly">Monthly</option>
                    <option value="weekly">Weekly</option>
                    <option value="none">none</option>
                </select>
                <input type="submit" value="Sign UP" id="ST">
                <hr>
                <p id="Or"> OR</p>
                <p id="have">Already have an account? <a id="Link" href="{{ route('Ulogin') }}">Sign in</a> </p>

            </form>
        </div>
    </div>
@endsection
