@extends('layouts.app')

@section('head-content')
    <link href="{{ asset('shopme/slider/css/full-slider.css')}}" rel="stylesheet">
@endsection

@section('content')
   <div class="page_wrapper">

    <div class="container">

     <div class="row">

      <!-- - - - - - - - - - - - - - Banners - - - - - - - - - - - - - - - - -->

      <aside class="col-md-3 col-sm-4 has_mega_menu">

       <!-- - - - - - - - - - - - - - Today's deals - - - - - - - - - - - - - - - - -->

       <section class="section_offset animated transparent" data-animation="fadeInDown">

        <h3 class="widget_title">Today's Deals</h3>

        <!-- - - - - - - - - - - - - - Carousel of today's deals - - - - - - - - - - - - - - - - -->

        <div class="owl_carousel widgets_carousel">

         <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

         <div class="product_item">

          <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

          <div class="image_wrap">

           <img src="images/deals_img_1.jpg" alt="">

           <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

           <div class="actions_wrap">

            <div class="centered_buttons">

             <a href="index.html#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

             <a href="index.html#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

            </div><!--/ .centered_buttons -->

            <a href="index.html#" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

            <a href="index.html#" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

           </div><!--/ .actions_wrap-->
           
           <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

          </div><!--/. image_wrap-->

          <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

          <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

          <div class="label_offer percentage">

           <div>30%</div>OFF

          </div>

          <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

          <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

          <div class="countdown" data-year="2016" data-month="11" data-day="6" data-hours="15" data-minutes="0" data-seconds="0"></div>

          <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

          <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

          <div class="description">

           <p><a href="index.html#">Lorem Body Wash, Original 24 fl oz</a></p>

           <div class="clearfix product_info">

            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

            <ul class="rating alignright">

             <li class="active"></li>
             <li class="active"></li>
             <li class="active"></li>
             <li class="active"></li>
             <li></li>

            </ul>

            <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

            <p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

           </div><!--/ .clearfix.product_info-->

          </div>

          <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

         </div><!--/ .product_item-->
         
         <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

         <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

         <div class="product_item">

          <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
          
          <div class="image_wrap">

           <img src="images/deals_img_2.jpg" alt="">

           <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

           <div class="actions_wrap">

            <div class="centered_buttons">

             <a href="index.html#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

             <a href="index.html#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

            </div><!--/ .centered_buttons -->

            <a href="index.html#" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

            <a href="index.html#" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

           </div><!--/ .actions_wrap-->
           
           <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

          </div><!--/. image_wrap-->

          <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

          <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

          <div class="label_offer percentage">

           <div>25%</div>OFF

          </div>

          <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

          <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

          <div class="countdown" data-year="2016" data-month="2" data-day="9" data-hours="10" data-minutes="30" data-seconds="30"></div>

          <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

          <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

          <div class="description">

           <p><a href="index.html#">Ipsum with Ultra Dolor, Size 4 Diapers 29 ea</a></p>

           <div class="clearfix product_info">

            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

            <ul class="rating alignright">

             <li class="active"></li>
             <li class="active"></li>
             <li class="active"></li>
             <li class="active"></li>
             <li class="active"></li>

            </ul>

            <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

            <p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

           </div><!--/ .clearfix.product_info-->

          </div>

          <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

         </div><!--/ .product_item-->
         
         <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

         <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

         <div class="product_item">

          <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
          
          <div class="image_wrap">

           <img src="images/deals_img_3.jpg" alt="">

           <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

           <div class="actions_wrap">

            <div class="centered_buttons">

             <a href="index.html#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

             <a href="index.html#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

            </div><!--/ .centered_buttons -->

            <a href="index.html#" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

            <a href="index.html#" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

           </div><!--/ .actions_wrap-->
           
           <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

          </div><!--/. image_wrap-->

          <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

          <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

          <div class="label_offer percentage">

           <div>40%</div>OFF

          </div>

          <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

          <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

          <div class="countdown" data-year="2016" data-month="2" data-day="9" data-hours="10" data-minutes="30" data-seconds="30"></div>

          <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

          <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

          <div class="description">

           <p><a href="index.html#">Ut  Tellus Dolor, Dapibus Eget, 1000mg, Tablets, 120 ea</a></p>

           <div class="clearfix product_info">

             <p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

           </div><!--/ .clearfix.product_info-->

          </div>

          <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

         </div><!--/ .product_item-->
         
         <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

         <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

         <div class="product_item">

          <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
          
          <div class="image_wrap">

           <img src="images/deals_img_4.jpg" alt="">

           <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

           <div class="actions_wrap">

            <div class="centered_buttons">

             <a href="index.html#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

             <a href="index.html#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

            </div><!--/ .centered_buttons -->

            <a href="index.html#" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

            <a href="index.html#" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

           </div><!--/ .actions_wrap-->
           
           <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

          </div><!--/. image_wrap-->

          <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

          <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

          <div class="label_offer percentage">

           <div>15%</div>OFF

          </div>

          <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

          <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

          <div class="countdown" data-year="2016" data-month="1" data-day="31" data-hours="18" data-minutes="40" data-seconds="40"></div>

          <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

          <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

          <div class="description">

           <p><a href="index.html#">Nulla  Facilisi Aenean Nec Eros Vestibulum, Deep Cleansing 1 each</a></p>

           <div class="clearfix product_info">

            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

             <ul class="rating alignright">

             <li class="active"></li>
             <li class="active"></li>
             <li class="active"></li>
             <li></li>
             <li></li>

            </ul>

            <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

            <p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

           </div><!--/ .clearfix.product_info-->

          </div>

          <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

         </div><!--/ .product_item-->
         
         <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

         <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

         <div class="product_item">

          <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
          
          <div class="image_wrap">

           <img src="images/deals_img_5.jpg" alt="">

           <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

           <div class="actions_wrap">

            <div class="centered_buttons">

             <a href="index.html#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

             <a href="index.html#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

            </div><!--/ .centered_buttons -->

            <a href="index.html#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

            <a href="index.html#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

           </div><!--/ .actions_wrap-->
           
           <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

          </div><!--/. image_wrap-->

          <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

          <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

          <div class="label_offer percentage">

           <div>50%</div>OFF

          </div>

          <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

          <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

          <div class="countdown" data-year="2016" data-month="3" data-day="16" data-hours="11" data-minutes="10" data-seconds="10"></div>

          <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

          <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

          <div class="description">

           <p><a href="index.html#">Nam  Elit Agna Endrerit Sit Amet, Chocolate Milk 4 ea</a></p>

           <div class="clearfix product_info">

             <p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

           </div><!--/ .clearfix.product_info-->

          </div>

          <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

         </div><!--/ .product_item-->
         
         <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

        </div><!--/ .widgets_carousel-->

        <!-- - - - - - - - - - - - - - End of carousel of today's deals - - - - - - - - - - - - - - - - -->

        <!-- - - - - - - - - - - - - - View all deals of the day - - - - - - - - - - - - - - - - -->

        <footer class="bottom_box">

         <a href="index.html#" class="button_grey middle_btn">View All Deals</a>

        </footer>

        <!-- - - - - - - - - - - - - - End of view all deals of the day - - - - - - - - - - - - - - - - -->

       </section><!--/ .section_offset.animated.transparent-->

       <!-- - - - - - - - - - - - - - End of today's deals - - - - - - - - - - - - - - - - -->

       <!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->

       <section class="section_offset animated transparent" data-animation="fadeInDown">

        <h3>Categories</h3>

        <ul class="theme_menu cats">

         <li class="has_megamenu">

          <a href="index.html#">Medicine &amp; Health (1375)</a>

          <!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

          <div class="mega_menu clearfix">

           <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

           <div class="mega_menu_item">
           
            <ul class="list_of_links">

             <li><a href="index.html#">Allergy &amp; Sinus</a></li>
             <li><a href="index.html#">Children's Healthcare</a></li>
             <li><a href="index.html#">Cough, Cold &amp; Flu</a></li>
             <li><a href="index.html#">Diabetes Management</a></li>
             <li><a href="index.html#">Digestion &amp; Nausea</a></li>
             <li><a href="index.html#">Eye Care</a></li>
             <li><a href="index.html#">First Aid</a></li>
             <li><a href="index.html#">Foot Care</a></li>
             <li><a href="index.html#">Health Clearance</a></li>

            </ul>

           </div><!--/ .mega_menu_item-->

           <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

           <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

           <div class="mega_menu_item">

            <ul class="list_of_links">

             <li><a href="index.html#">Home Health Care</a></li>
             <li><a href="index.html#">Home Tests</a></li>
             <li><a href="index.html#">Incontinence Aids</a></li>
             <li><a href="index.html#">Natural &amp; Homeopathic</a></li>
             <li><a href="index.html#">Pain &amp; Fever Relief</a></li>
             <li><a href="index.html#">Skin Condition Treatments</a></li>
             <li><a href="index.html#">Sleep &amp; Snoring aids</a></li>
             <li><a href="index.html#">Stop Smoking Aids</a></li>
             <li><a href="index.html#">Support &amp; Braces</a></li>

            </ul>

           </div><!--/ .mega_menu_item-->

           <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

          </div><!--/ .mega_menu-->

          <!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

         </li>
         <li class="has_megamenu">

          <a href="index.html#">Beauty (1687)</a>

          <!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

          <div class="mega_menu type_2 clearfix">

           <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

           <div class="mega_menu_item">
           
            <h6><b>By Category</b></h6>
           
            <ul class="list_of_links">

             <li><a href="index.html#">Bath &amp; Spa</a></li>
             <li><a href="index.html#">Beauty Clearance</a></li>
             <li><a href="index.html#">Gift Sets</a></li>
             <li><a href="index.html#">Hair Care</a></li>
             <li><a href="index.html#">Makeup &amp; Accessories</a></li>
             <li><a href="index.html#">Skin Care</a></li>
             <li><a href="index.html#">Tools &amp; Accessories</a></li>
             <li><a href="index.html#" class="all">View All Categories</a></li>

            </ul>

           </div><!--/ .mega_menu_item-->

           <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

           <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

           <div class="mega_menu_item">

            <h6><b>By Brand</b></h6>
           
            <ul class="list_of_links">

             <li><a href="index.html#">Abibas</a></li>
             <li><a href="index.html#">Agedir</a></li>
             <li><a href="index.html#">Aldan</a></li>
             <li><a href="index.html#">Biomask</a></li>
             <li><a href="index.html#">Gamman</a></li>
             <li><a href="index.html#">Pallona</a></li>
             <li><a href="index.html#">Pure Care</a></li>
             <li><a href="index.html#" class="all">View All Brands</a></li>

            </ul>

           </div><!--/ .mega_menu_item-->

           <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

           <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

           <div class="mega_menu_item">
            
            <a href="index.html#">
             <img src="images/mega_menu_img_1.jpg" alt="">
            </a>

           </div><!--/ .mega_menu_item-->

           <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

          </div><!--/ .mega_menu-->

          <!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

         </li>
         <li class="has_megamenu">

          <a href="index.html#">Personal Care (1036)</a>

          <!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

          <div class="mega_menu type_3 clearfix">

           <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

           <div class="mega_menu_item">

            <ul class="list_of_links">

             <li><a href="index.html#">Oral Care</a></li>
             <li><a href="index.html#">Shaving &amp; Hair Removal</a></li>
             <li><a href="index.html#">Men's</a></li>
             <li><a href="index.html#">Sun Care</a></li>
             <li><a href="index.html#">Clearance</a></li>
             <li><a href="index.html#">Feminine Care</a></li>
             <li><a href="index.html#">Gift Sets</a></li>
             <li><a href="index.html#">Soaps &amp; Bodywash</a></li>
             <li><a href="index.html#">Massage &amp; Relaxation</a></li>
             <li><a href="index.html#">Foot Care</a></li>
             <li><a href="index.html#" class="all">View All Categories</a></li>

            </ul>

           </div><!--/ .mega_menu_item -->

           <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

           <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

           <div class="mega_menu_item products_in_mega_menu">

            <h6 class="widget_title"><b>Today's Deals</b></h6>

            <div class="row">

             <div class="col-sm-4">

              <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

              <div class="product_item">

               <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

               <div class="image_wrap">

                <img src="images/product_img_11.jpg" alt="">

               </div><!--/. image_wrap-->

               <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

               <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

               <div class="label_offer percentage">

                <div>30%</div>OFF

               </div>

               <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

               <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

               <div class="description">

                <p><a href="index.html#">Ivory Body Wash, Original 24 fl oz</a></p>

                <div class="clearfix product_info">

                 <p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

                </div><!--/ .clearfix.product_info-->

               </div>

               <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

              </div><!--/ .product_item-->
              
              <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

             </div><!--/ [col]-->

             <div class="col-sm-4">

              <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

              <div class="product_item">

               <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
               
               <div class="image_wrap">

                <img src="images/product_img_12.jpg" alt="">

               </div><!--/. image_wrap-->

               <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

               <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

               <div class="label_offer percentage">

                <div>25%</div>OFF

               </div>

               <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

               <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

               <div class="description">

                <p><a href="index.html#">Luvs with Leakguards, Size 4 Diapers 29 ea</a></p>

                <div class="clearfix product_info">

                 <p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

                </div><!--/ .clearfix.product_info-->

               </div>

               <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

              </div><!--/ .product_item-->
              
              <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

             </div><!--/ [col]-->

             <div class="col-sm-4">

              <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

              <div class="product_item">

               <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
               
               <div class="image_wrap">

                <img src="images/product_img_13.jpg" alt="">

               </div><!--/. image_wrap-->

               <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

               <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

               <div class="label_offer percentage">

                <div>40%</div>OFF

               </div>

               <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

               <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

               <div class="description">

                <p><a href="index.html#">Doctor's Best Curcumin C3 Complex with...</a></p>

                <div class="clearfix product_info">

                 <p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

                </div><!--/ .clearfix.product_info-->

               </div>

               <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

              </div><!--/ .product_item-->
              
              <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

             </div><!--/ [col]-->
             
            </div><!--/ .row-->

            <hr>

            <a href="index.html#" class="button_grey">View All Deals</a>

           </div><!--/ .mega_menu_item-->

           <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

          </div><!--/ .mega_menu-->

          <!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

         </li>
         <li class="has_megamenu">

          <a href="index.html#">Vitamins &amp; Supplements (202)</a>

          <!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

          <div class="mega_menu type_4 clearfix">

           <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

           <div class="mega_menu_item">

            <h6><b>By Condition</b></h6>
           
            <ul class="list_of_links">

             <li><a href="index.html#">Aches &amp; Pains</a></li>
             <li><a href="index.html#">Acne Solutions</a></li>
             <li><a href="index.html#">Allergy &amp; Sinus</a></li>
             <li><a href="index.html#" class="all">View All</a></li>

            </ul>

           </div><!--/ .mega_menu_item-->

           <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

           <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

           <div class="mega_menu_item">

            <h6><b>Multivitamins</b></h6>

            <ul class="list_of_links">

             <li><a href="index.html#">50+ Multivitamins</a></li>
             <li><a href="index.html#">Children's Multivitamins</a></li>
             <li><a href="index.html#">Men's Multivitamins</a></li>
             <li><a href="index.html#" class="all">View All</a></li>

            </ul>

           </div><!--/ .mega_menu_item-->

           <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

           <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

           <div class="mega_menu_item">

            <h6><b>Herbs</b></h6>

            <ul class="list_of_links">

             <li><a href="index.html#">Aloe Vera</a></li>
             <li><a href="index.html#">Ashwagandha</a></li>
             <li><a href="index.html#">Astragalus</a></li>
             <li><a href="index.html#" class="all">View All</a></li>

            </ul>

           </div><!--/ .mega_menu_item-->

           <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

           <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

           <div class="mega_menu_banner">

            <a href="index.html#">
             <img src="images/mega_menu_img_2.jpg" alt="">
            </a>

           </div><!--/ .mega_menu_banner-->

           <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

          </div><!--/ .mega_menu-->

          <!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

         </li>
         <li class="has_megamenu"><a href="index.html#">Baby Needs (525)</a></li>
         <li class="has_megamenu"><a href="index.html#">Diet &amp; Fitness (135)</a></li>
         <li class="has_megamenu"><a href="index.html#">Sexuall Well-being (298)</a></li>
         <li class="has_megamenu"><a href="index.html#" class="all"><b>All Categories</b></a></li>

        </ul>

       </section><!--/ .animated.transparent-->

       <!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->

       <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

       <div class="section_offset animated transparent" data-animation="fadeInDown">

        <a href="index.html#">
         
         <img src="images/banner_img_10.png" alt="">

        </a>

       </div>

       <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

       <!-- - - - - - - - - - - - - - Testimonials - - - - - - - - - - - - - - - - -->

       <section class="section_offset animated transparent" data-animation="fadeInDown">

        <h3>Testimonials</h3>

        <!-- - - - - - - - - - - - - - Carousel of testimonials - - - - - - - - - - - - - - - - -->

        <div class="owl_carousel widgets_carousel">

         <!-- - - - - - - - - - - - - - Testimonial - - - - - - - - - - - - - - - - -->

         <blockquote>

          <div class="author_info"><b>Alan, Los Angeles</b></div>

          <p>Ut tellus dolor, dapibus eget, elementum vel, cursus elefiend, elit. Aenean wisi et urna. Aliquam erat volutpat. Duis ac turpis.</p>

         </blockquote>
         
         <!-- - - - - - - - - - - - - - End testimonial - - - - - - - - - - - - - - - - -->

         <!-- - - - - - - - - - - - - - Testimonial - - - - - - - - - - - - - - - - -->

         <blockquote>

          <div class="author_info"><b>Tracy, New York</b></div>

          <p>Donec sit amet eros. Lorem ipsum dolor sit amet elit. Mauris amet fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget.</p>

         </blockquote>

         <!-- - - - - - - - - - - - - - End testimonial - - - - - - - - - - - - - - - - -->

         <!-- - - - - - - - - - - - - - Testimonial - - - - - - - - - - - - - - - - -->

         <blockquote>

          <div class="author_info"><b>Nikki, Boston</b></div>

          <p>Ut tellus dolor, dapibus eget, elementum vel, cursus elefiend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat.</p>

         </blockquote>
         
         <!-- - - - - - - - - - - - - - End testimonial - - - - - - - - - - - - - - - - -->

        </div><!--/ .widgets_carousel-->

        <!-- - - - - - - - - - - - - - End of carousel of testimonials - - - - - - - - - - - - - - - - -->

        <!-- - - - - - - - - - - - - - View all testimonials - - - - - - - - - - - - - - - - -->

        <footer class="bottom_box">

         <a href="index.html#" class="button_grey middle_btn">View All Testimonials</a>

        </footer>

        <!-- - - - - - - - - - - - - - End of view all testimonials - - - - - - - - - - - - - - - - -->

       </section><!--/ .section_offset.animated.transparent-->

       <!-- - - - - - - - - - - - - - End of testimonials - - - - - - - - - - - - - - - - -->

       <!-- - - - - - - - - - - - - - Bestseller Products - - - - - - - - - - - - - - - - -->

       <section class="section_offset animated transparent" data-animation="fadeInDown">

        <h3>Bestseller Products</h3>

        <ul class="products_list_widget">

         <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

         <li>
          
          <a href="index.html#" class="product_thumb">
           
           <img src="images/product_thumb_4.jpg" alt="">

          </a>

          <div class="wrapper">

           <a href="index.html#" class="product_title">Fusce  Euismod Consequat Ante...</a>

           <div class="clearfix product_info">

              <p class="product_price alignleft"><b>$5.99</b></p>

            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

            <ul class="rating alignright">

             <li class="active"></li>
             <li class="active"></li>
             <li class="active"></li>
             <li class="active"></li>
             <li></li>

            </ul>
            
            <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

           </div>

          </div>

         </li>

         <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

         <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

         <li>
          
          <a href="index.html#" class="product_thumb">
           
           <img src="images/product_thumb_5.jpg" alt="">

          </a>

          <div class="wrapper">

           <a href="index.html#" class="product_title">Lorem  Ipsum Dolor Sit Amet...</a>

           <div class="clearfix product_info">

              <p class="product_price alignleft"><b>$8.99</b></p>

            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

            <ul class="rating alignright">

             <li class="active"></li>
             <li class="active"></li>
             <li class="active"></li>
             <li class="active"></li>
             <li class="active"></li>

            </ul>
            
            <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

           </div>

          </div>

         </li>

         <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

         <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

         <li>
          
          <a href="index.html#" class="product_thumb">
           
           <img src="images/product_thumb_6.jpg" alt="">

          </a>

          <div class="wrapper">

           <a href="index.html#" class="product_title">Ut Tellus  Dolor Dapibus Eget...</a>

           <div class="clearfix product_info">

              <p class="product_price alignleft"><b>$76.99</b></p>

            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

            <ul class="rating alignright">

             <li class="active"></li>
             <li class="active"></li>
             <li class="active"></li>
             <li class="active"></li>
             <li class="active"></li>

            </ul>
            
            <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

           </div>

          </div>

         </li>

         <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

        </ul><!--/ .list_of_products-->

        <!-- - - - - - - - - - - - - - View all products - - - - - - - - - - - - - - - - -->

        <footer class="bottom_box">

         <a href="index.html#" class="button_grey middle_btn">View All</a>

        </footer>

        <!-- - - - - - - - - - - - - -End of view all products - - - - - - - - - - - - - - - - -->

       </section>

       <!-- - - - - - - - - - - - - - End of Bestseller Products - - - - - - - - - - - - - - - - -->

       <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

       <div class="section_offset animated transparent" data-animation="fadeInDown">

        <a href="index.html#">
         
         <img src="images/banner_img_11.png" alt="">

        </a>

       </div>

       <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

       <!-- - - - - - - - - - - - - - On Sale Products - - - - - - - - - - - - - - - - -->

       <section class="section_offset animated transparent" data-animation="fadeInDown">

        <h3>On Sale Products</h3>

        <ul class="products_list_widget">

         <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

         <li>
          
          <a href="index.html#" class="product_thumb">
           
           <img src="images/product_thumb_10.jpg" alt="">

          </a>

          <div class="wrapper">

           <a href="index.html#" class="product_title">Fusce Euismod Consequat Ante...</a>

           <div class="clearfix product_info">

            <p class="product_price alignleft"><s>$29.99</s> <b>$21.99</b></p>

           </div>

          </div>

         </li>

         <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

         <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

         <li>
          
          <a href="index.html#" class="product_thumb">
           
           <img src="images/product_thumb_11.jpg" alt="">

          </a>

          <div class="wrapper">

           <a href="index.html#" class="product_title">Lorem Ipsum Dolor Sit Amet...</a>

           <div class="clearfix product_info">

             <p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

           </div>

          </div>

         </li>

         <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

         <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

         <li>
          
          <a href="index.html#" class="product_thumb">
           
           <img src="images/product_thumb_12.jpg" alt="">

          </a>

          <div class="wrapper">

           <a href="index.html#" class="product_title">Lorem Ipsum Dolor Sit Amet...</a>

           <div class="clearfix product_info">

             <p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

           </div>

          </div>

         </li>

         <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

        </ul><!--/ .list_of_products-->

        <!-- - - - - - - - - - - - - - View all products - - - - - - - - - - - - - - - - -->

        <footer class="bottom_box">

         <a href="index.html#" class="button_grey middle_btn">View All</a>

        </footer>

        <!-- - - - - - - - - - - - - -End of view all products - - - - - - - - - - - - - - - - -->

       </section>

       <!-- - - - - - - - - - - - - - End of On Sale Products - - - - - - - - - - - - - - - - -->

       <!-- - - - - - - - - - - - - - Sign Up to Our Newsletter - - - - - - - - - - - - - - - - -->

       <section class="section_offset animated transparent" data-animation="fadeInDown">

        <h3>Sign Up to Our Newsletter</h3>

        <div class="theme_box">

         <p class="form_caption">Sing up to our newsletter and get exclusive deals you wont find any- where else straight to your inbox!</p>

         <form class="newsletter subscribe clearfix" novalidate>

          <input type="email" name="sc_email" placeholder="Enter your email address">

          <button class="button_blue def_icon_btn"></button>

         </form>

        </div><!--/ .theme_box-->

       </section>

       <!-- - - - - - - - - - - - - - End of Sign Up to Our Newsletter - - - - - - - - - - - - - - - - -->

      </aside><!--/ [col]-->

      <!-- - - - - - - - - - - - - - End of banners - - - - - - - - - - - - - - - - -->

      <!-- - - - - - - - - - - - - - Main slider - - - - - - - - - - - - - - - - -->

      <main class="col-md-9 col-sm-8">

       <div class="section_offset animated transparent" data-animation="fadeInDown">
       
        <!-- - - - - - - - - - - - - - Revolution slider - - - - - - - - - - - - - - - - -->

           @include('layouts.home.slider')
        
        <!-- - - - - - - - - - - - - - End of Revolution slider - - - - - - - - - - - - - - - - -->

       </div><!--/ .section_offset -->

       <!-- - - - - - - - - - - - - - Banners - - - - - - - - - - - - - - - - -->

       <div class="section_offset">
           @include('layouts.home.banner')

       </div><!--/ .section_offset-->

       <!-- - - - - - - - - - - - - - End of banners - - - - - - - - - - - - - - - - -->

       <!-- - - - - - - - - - - - - - Medicine & Health - - - - - - - - - - - - - - - - -->

         @include('layouts.home.cat_tabs') 

       <!-- - - - - - - - - - - - - - End of Medicine & Health - - - - - - - - - - - - - - - - -->

      </main><!--/ [col]-->

      <!-- - - - - - - - - - - - - - End of main slider - - - - - - - - - - - - - - - - -->

     </div><!--/ .row-->

    </div><!--/ .container-->

   </div><!--/ .page_wrapper-->
@endsection

@section('footer-content')
<script src="{{ asset('shopme/slider/vendor/popper/popper.min.js')}}"></script>
    <script type="text/javascript">
	$(document).ready(function(){
	    $("#show").addClass("active");
	});
    </script>
@endsection    