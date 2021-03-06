 <div class="table_layout">
       <div class="table_row">
         <div class="table_cell">
             <section>
                 <p class="subcaption">{{ __('form.already_rgstrd') }}</p>
                 <form id="login_form" class="type_2" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                     <ul>
                         <li class="row">
                             <div class="col-xs-12">
                                 <label for="email" class="required">{{ __('form.email') }}</label>
                                 <input type="email" name="email" id="email">
                             </div>
                         </li>
                         <li class="row">
                             <div class="col-xs-12">
                                 <label for="password" class="required">{{ __('form.password') }}</label>
                                 <input type="password" name="password" id="password">
                             </div>
                         </li>
                         <li class="row">
                             <div class="col-xs-12">

                                 <div class="on_the_sides">

                                     <div class="left_side">

                                         <a href="shop_checkout.html#" class="small_link">{{ __('form.forget_password') }}</a>

                                     </div>

                                     <div class="right_side">

                                         <span class="prompt">{{ __('form.rqrd_fields') }}</span>

                                     </div>

                                 </div>

                             </div>

                         </li>

                     </ul>

                 </form>

             </section>

         </div><!--/ .table_cell -->

     </div><!--/ .table_row -->

     <div class="table_row">

         <div class="table_cell">

             <div class="on_the_sides login_with">

                 <div class="left_side">

                     <button type="submit" form="login_form" class="button_blue middle_btn">{{ __('form.login') }}</button>

                 </div>

                 <div class="right_side v_centered">

                     <h4>{{ __('form.or_login_with') }}</h4>

                     <ul class="horizontal_list social_btns">

                         <li><a href="shop_checkout.html#" class="icon_btn middle_btn social_facebook tooltip_container"><i class="icon-facebook-1"></i><span class="tooltip top">Facebook</span></a></li>

                         <li><a href="shop_checkout.html#" class="icon_btn middle_btn social_twitter tooltip_container"><i class="icon-twitter"></i><span class="tooltip top">Twitter</span></a></li>

                         <li><a href="shop_checkout.html#" class="icon_btn middle_btn social_googleplus tooltip_container"><i class="icon-gplus-2"></i><span class="tooltip top">GooglePlus</span></a></li>

                     </ul><!--/ .horizontal_list.social_btns-->

                 </div>

             </div>

         </div><!--/ .table_cell -->

     </div> <!-- .table_row -->




 </div><!--/ .table_layout -->
