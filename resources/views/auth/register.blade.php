@extends('layouts.app')
@section('content')
<div class="secondary_page_wrapper">
 <div class="container">
  <section class="section_offset col-md-8 col-md-offset-2">

    <h1 style="background-color:#018BC8; padding:10px; color:white; margin-top:50px; "><center>Register</center></h1>

    <div class="theme_box">

        <form class="form-horizontal type_2" method="POST" id="myForm" action="{{ route('register') }}">
           {{ csrf_field() }}

            <ul>

                <li class="row">

                    <div class="col-sm-6">

                        <label for="first_name" class="required">First Name</label>
                        <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}">

                    </div><!--/ [col] -->

                    <div class="col-sm-6">

                        <label for="last_name" class="required">Last Name</label>
                        <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}">

                    </div><!--/ [col] -->

                </li><!--/ .row -->

                <li class="row">

                    <div class="col-sm-6">

                        <label for="email_address" class="required">Email Address</label>
                        <input type="text" name="email" id="email_address" value="{{ old('email') }}">

                    </div><!--/ [col] -->

                </li><!--/ .row -->

                <li class="row">

                    <div class="col-sm-6">

                        <label for="password" class="required">Password</label>
                        <input type="password" name="password" id="password">

                    </div><!--/ [col] -->

                    <div class="col-sm-6">

                        <label for="password_confirmation" class="required">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="confirm">

                    </div><!--/ [col] -->

                </li><!--/ .row -->

            </ul>

        </form>

    </div>

    <footer class="bottom_box on_the_sides">

        <div class="left_side">

            <button type="submit" class="button_blue middle_btn" form="myForm">
                    Register
            </button>

        </div>

        <div class="right_side">

            <span class="prompt">Required Fields</span>

        </div>

    </footer>

</section>
 </div>
</div>

@endsection
