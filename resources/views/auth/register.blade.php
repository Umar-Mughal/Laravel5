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

                    <div class="col-sm-6">

                        <label for="phone" class="required">Phone</label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone') }}">

                    </div><!--/ [col] -->

                </li><!--/ .row -->

                <li class="row">    

                    <div class="col-xs-12">

                        <label for="address" class="required">Address</label>
                        <input type="text" name="address" id="address" value="{{ old('address') }}">

                    </div><!--/ [col] -->

                </li><!-- / .row -->

                <li class="row">

                    <div class="col-xs-12">

                        <input type="text" name="">

                    </div><!--/ [col] -->

                </li><!--/ .row -->

                <li class="row">

                    <div class="col-sm-6">
                        
                        <label for="city" class="required">City</label>
                        <input type="text" name="city" id="city" value="{{ old('city') }}">

                    </div><!--/ [col] -->

                    <div class="col-sm-6">

                        <label class="required">State/Province</label>

                        <div class="custom_select"><div class="active_option open_select">Punjab</div><ul class="options_list dropdown"><li class="animated_item" style="transition-delay:0.1s"><a href="#">Sindh</a></li><li class="animated_item" style="transition-delay:0.2s"><a href="#">Balochistan</a></li><li class="animated_item" style="transition-delay:0.3s"><a href="#">Kheber-Pakhtonhwa</a></li></ul>

                            <select name="state" style="display: none;">

                                <option value="Alabama">Sindh</option>
                                <option value="Illinois">Balochistan</option>
                                <option value="Kansas">Kheber-Pakhtonhwa</option>

                            </select>

                        </div>

                    </div><!--/ [col] -->

                </li><!--/ .row -->

                <li class="row">

                    <div class="col-sm-6">

                        <label for="postal_code" class="required">Zip/Postal Code</label>
                        <input type="text" name="postal_code" id="postal_code" value="{{ old('postal_code') }}">

                    </div><!--/ [col] -->

                    

                </li><!--/ .row -->

                <li class="row">

                    

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
 