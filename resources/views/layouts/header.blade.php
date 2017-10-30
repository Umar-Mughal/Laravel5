<header id="header" class="type_6">

				<!-- - - - - - - - - - - - - - Top part - - - - - - - - - - - - - - - - -->

				<div class="top_part">

					<div class="container">

						<div class="row">

							<div class="col-lg-6 col-md-7 col-sm-8">

								<!-- - - - - - - - - - - - - - Login - - - - - - - - - - - - - - - - -->
								@guest

								<p>Welcom visitor <a data-toggle="modal" href="#myModal">{{ __('form.login') }}</a> or <a href="{{ route('register') }}">{{ __('form.rgstr') }}</a></p>

								<!-- Modal -->
								<div id="myModal" class="modal fade" role="dialog">
								  <div class="modal-dialog">

								    <!-- Modal content-->
								    <div class="modal-content">
								      <div class="modal-header">
								        <button style="margin-right: 5px" type="button" class="close" data-dismiss="modal"></button>
								        <h4 class="modal-title">{{ __('form.login') }}</h4>
								      </div>
								      <div class="modal-body">
								        <p> @include('layouts.login_form') </p>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								      </div>
								    </div>

								  </div>
								</div>

								@else

								Welcome

								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><b>
                                    {{ Auth::user()->first_name }} </b> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>

								@endguest



								<!-- - - - - - - - - - - - - - End login - - - - - - - - - - - - - - - - -->

							</div> <!--/ [col]-->

							<div class="col-lg-6 col-md-5 col-sm-4">

								<div class="clearfix">

									<!-- - - - - - - - - - - - - - Language change - - - - - - - - - - - - - - - - -->

									<div class="alignright site_settings">
										@if (Session::has('locale'))
											<span class="current open_"><img src="images/flag_en.jpg" alt="">{{ session('locale') }}</span>
										@else
											<span class="current open_"><img src="images/flag_en.jpg" alt="">{{ Config::get('app.locale') }}</span>
										@endif


										<ul class="dropdown site_setting_list language">

											<li class="animated_item"><a href="{{ route('language','en') }}"><img src="images/flag_en.jpg" alt=""> English </a></li>
											<li class="animated_item"><a href="{{ route('language','ur') }}"><img src="images/flag_g.jpg" alt=""> Urdu </a></li>
											<li class="animated_item"><a href="{{ route('language','fr') }}"><img src="images/flag_s.jpg" alt=""> French </a></li>

										</ul>

									</div><!--/ .alignright.site_settings-->

									<!-- - - - - - - - - - - - - - End of language change - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Currency change - - - - - - - - - - - - - - - - -->

									<div class="alignright site_settings currency">

										<span class="current open_">USD</span>

										<ul class="dropdown site_setting_list">

											<li class="animated_item"><a href="index.html#">USD</a></li>
											<li class="animated_item"><a href="index.html#">EUR</a></li>
											<li class="animated_item"><a href="index.html#">GBP</a></li>

										</ul>

									</div><!--/ .alignright.site_settings.currency-->

									<!-- - - - - - - - - - - - - - End of currency change - - - - - - - - - - - - - - - - -->

								</div><!--/ .clearfix-->

							</div><!--/ [col]-->

						</div><!--/ .row-->

					</div><!--/ .container -->

				</div><!--/ .top_part -->

				<!-- - - - - - - - - - - - - - End of top part - - - - - - - - - - - - - - - - -->

				<hr>

				<!-- - - - - - - - - - - - - - Bottom part - - - - - - - - - - - - - - - - -->

				<div class="bottom_part">

					<div class="container">

						<div class="row">

							<div class="main_header_row">

								<div class="col-sm-3">

									<!-- - - - - - - - - - - - - - Logo - - - - - - - - - - - - - - - - -->

									<a href="index.html" class="logo">

										<img src="images/logo.png" alt="">

									</a>

									<!-- - - - - - - - - - - - - - End of logo - - - - - - - - - - - - - - - - -->

								</div><!--/ [col]-->

								<div class="col-sm-3">

									<!-- - - - - - - - - - - - - - Call to action - - - - - - - - - - - - - - - - -->

									<div class="call_us">

										<span>Call us toll free:</span> <b>+1888 234 5678</b>

									</div><!--/ .call_us-->

									<!-- - - - - - - - - - - - - - End call to action - - - - - - - - - - - - - - - - -->

								</div><!--/ [col]-->

								<div class="col-sm-6">

									<!-- - - - - - - - - - - - - - Search form - - - - - - - - - - - - - - - - -->

									<form class="clearfix search">

										<input type="text" name="" tabindex="1" placeholder="Search..." class="alignleft">

										<!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->

										<div class="search_category alignleft">

											<div class="open_categories">All Categories</div>

											<ul class="categories_list dropdown">

												<li class="animated_item"><a href="index.html#">Medicine &amp; Health</a></li>
												<li class="animated_item"><a href="index.html#">Beauty</a></li>
												<li class="animated_item"><a href="index.html#">Personal Care</a></li>
												<li class="animated_item"><a href="index.html#">Vitamins &amp; Supplements</a></li>
												<li class="animated_item"><a href="index.html#">Baby Needs</a></li>
												<li class="animated_item"><a href="index.html#">Diet &amp; Fitness</a></li>
												<li class="animated_item"><a href="index.html#">Sexual Well-being</a></li>

											</ul>

										</div><!--/ .search_category.alignleft-->

										<!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->

										<button class="button_blue def_icon_btn alignleft"></button>

									</form><!--/ #search-->

									<!-- - - - - - - - - - - - - - End search form - - - - - - - - - - - - - - - - -->

								</div><!--/ [col]-->

							</div><!--/ .main_header_row-->

						</div><!--/ .row-->

					</div><!--/ .container-->

				</div><!--/ .bottom_part -->

				<!-- - - - - - - - - - - - - - End of bottom part - - - - - - - - - - - - - - - - -->

				<!-- - - - - - - - - - - - - - Main navigation wrapper - - - - - - - - - - - - - - - - -->

				<div id="main_navigation_wrap">

					<div class="container">

						<div class="row">

							<div class="col-xs-12">

								<!-- - - - - - - - - - - - - - Sticky container - - - - - - - - - - - - - - - - -->

								<div class="sticky_inner type_2">

									<!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

									<div class="nav_item size_4">

										<button class="open_menu"></button>

										<!-- - - - - - - - - - - - - - Main navigation - - - - - - - - - - - - - - - - -->

										<ul class="theme_menu cats dropdown">

											<li class="has_megamenu animated_item">

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

															<li><a href="{{ route('home')}}">Home Health Care</a></li>
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
											<li class="has_megamenu animated_item">

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
											<li class="has_megamenu animated_item">

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
											<li class="has_megamenu animated_item">

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
											<li class="has_megamenu animated_item"><a href="index.html#">Baby Needs (525)</a></li>
											<li class="has_megamenu animated_item"><a href="index.html#">Diet &amp; Fitness (135)</a></li>
											<li class="has_megamenu animated_item"><a href="index.html#">Sexuall Well-being (298)</a></li>
											<li class="has_megamenu animated_item"><a href="index.html#" class="all"><b>All Categories</b></a></li>

										</ul>

										<!-- - - - - - - - - - - - - - End of main navigation - - - - - - - - - - - - - - - - -->

									</div><!--/ .nav_item-->

									<!-- - - - - - - - - - - - - - End of navigation item - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

									<div class="nav_item">

										<nav class="main_navigation">

											<ul>

												<li class="current"><a href="{{ route('home')}}">Home</a></li>
												<li><a href="shop_my_account.html">My Account</a></li>
												<li><a href="{{ route('cart.index')}}">Shopping Cart</a></li>
												<li><a href="{{ route('checkout') }}">Checkout</a></li>
												<li><a href="blog_v1.html">Blog</a></li>
												<li><a href="additional_page_contact.html">Contact Us</a></li>

												<li class="has_submenu">

													<a href="index.html">Pages</a>

													<!-- - - - - - - - - - - - - - Submenu (level 2) - - - - - - - - - - - - - - - - -->

													<ul class="theme_menu submenu">

														<li class="has_submenu current">

															<a href="index.html">Homepage Layouts</a>

															<!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

															<ul class="theme_menu submenu">

																<li class="current"><a href="index.html">Home 1</a></li>
																<li><a href="home_v2.html">Home 2</a></li>
																<li><a href="home_v3.html">Home 3</a></li>
																<li><a href="home_v4.html">Home 4</a></li>
																<li><a href="home_v5.html">Home 5</a></li>
																<li><a href="home_v6.html">Home 6</a></li>

															</ul>

															<!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

														</li>

														<li class="has_submenu">

															<a href="category_page_v1.html">Category Page Layouts</a>

															<!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

															<ul class="theme_menu submenu">

																<li><a href="category_page_v1.html">Category page 1</a></li>
																<li><a href="category_page_v2.html">Category page 2</a></li>
																<li><a href="category_page_v3.html">Category page 3</a></li>
																<li><a href="category_page_v4.html">Category page 4</a></li>

															</ul>

															<!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

														</li>

														<li class="has_submenu">

															<a href="product_page_v1.html">Product Page Layouts</a>

															<!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

															<ul class="theme_menu submenu">

																<li><a href="product_page_v1.html">Product page 1</a></li>
																<li><a href="product_page_v2.html">Product page 2</a></li>
																<li><a href="product_page_v3.html">Product page 3</a></li>

															</ul>

															<!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

														</li>

														<li class="has_submenu">

															<a href="shop_shopping_cart.html">Other Shop Pages</a>

															<!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

															<ul class="theme_menu submenu">

																<li><a href="shop_shopping_cart.html">Shopping cart</a></li>
																<li><a href="shop_checkout.html">Checkout</a></li>
																<li><a href="shop_wishlist.html">Wishlist</a></li>
																<li><a href="shop_product_comparison.html">Product Comparison</a></li>
																<li><a href="shop_my_account.html">My Account</a></li>
																<li><a href="shop_manufacturers.html">Manufacturers</a></li>
																<li><a href="shop_manufacturer_page.html">Manufacturer Page</a></li>
																<li><a href="shop_orders_list.html">Order List</a></li>
																<li><a href="shop_order_page.html">Order Page</a></li>

															</ul>

															<!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

														</li>

														<li class="has_submenu">

															<a href="additional_page_about.html">Additional Pages</a>

															<!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

															<ul class="theme_menu submenu">

																<li><a href="additional_page_about.html">About Us</a></li>
																<li><a href="additional_page_contact.html">Contact Us</a></li>
																<li><a href="additional_page_faq.html">FAQ</a></li>
																<li><a href="additional_page_404.html">404 Page</a></li>
																<li><a href="additional_page_sitemap.html">Sitemap</a></li>

															</ul>

															<!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

														</li>

														<li class="has_submenu">

															<a href="extra_stuff_elements.html">Extra Stuff</a>

															<!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

															<ul class="theme_menu submenu">

																<li><a href="extra_stuff_elements.html">Elements</a></li>
																<li><a href="extra_stuff_typography.html">Typography</a></li>
																<li><a href="extra_stuff_columns.html">Columns</a></li>

															</ul>

															<!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

														</li>

														<li class="has_submenu">

															<a href="blog_v1.html">Blog Pages</a>

															<!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

															<ul class="theme_menu submenu">

																<li><a href="blog_v1.html">Blog v1</a></li>
																<li><a href="blog_v2.html">Blog v2</a></li>
																<li><a href="blog_v3.html">Blog v3</a></li>
																<li><a href="blog_post_v1.html">Blog Post v1</a></li>
																<li><a href="blog_post_v2.html">Blog Post v2</a></li>

															</ul>

															<!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

														</li>

													</ul>

													<!-- - - - - - - - - - - - - - End submenu (level 2) - - - - - - - - - - - - - - - - -->

												</li>

											</ul>

										</nav><!--/ .main_navigation-->

									</div>

									<!-- - - - - - - - - - - - - - End of navigation item - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

									<div class="nav_item size_4">

										<a href="index.html#" class="wishlist_button" data-amount="7"></a>

									</div><!--/ .nav_item-->

									<!-- - - - - - - - - - - - - - End of main navigation - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

									<div class="nav_item size_4">

										<a href="index.html#" class="compare_button" data-amount="10"></a>

									</div><!--/ .nav_item-->

									<!-- - - - - - - - - - - - - - End of main navigation - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

									<div class="nav_item size_3">

										<button id="open_shopping_cart" class="open_button" data-amount="{{ Cart::count() }}">
											<b class="title">My Cart</b>
											<b class="total_price">{{ Cart::subtotal() }}</b>
										</button>

										<!-- - - - - - - - - - - - - - Products list - - - - - - - - - - - - - - - - -->

										<div class="shopping_cart dropdown">

													@foreach($cart_items as $item)
													<div class="animated_item">

														<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

														<div class="clearfix sc_product">

															<a href="index.html#" class="product_thumb"><img src="{{ asset('storage/images/' .$item->options->image) }}" width="80" height="80" alt="Image"></a>

															<a href="index.html#" class="product_name">{{$item->name}}</a>

															<p>1 x ${{ $item->price }}</p>

																		{!! Form::open([
	                     'method'=>'DELETE',
	                     'url' => ['cart', $item->rowId],
	                     'style' => 'display:inline'
	                 ]) !!}
	                     {!! Form::button('', array(
	                             'type' => 'submit',
	                             'class' => 'close btn btn-danger btn-xs',
	                             'title' => 'Remove Product',
	                             'onclick'=>'return confirm("Confirm Remove?")'
	                     )) !!}
	                 {!! Form::close() !!}


														</div><!--/ .clearfix.sc_product-->

														<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

													</div><!--/ .animated_item-->

													@endforeach


													<div class="animated_item">

														<!-- - - - - - - - - - - - - - Total info - - - - - - - - - - - - - - - - -->

														<ul class="total_info">

															<li><span class="price">Tax:</span> $0.00</li>

															<li><span class="price">Discount:</span> $37.00</li>

															<li class="total"><b><span class="price">Total:</span> {{ Cart::total() }}</b></li>

														</ul>

														<!-- - - - - - - - - - - - - - End of total info - - - - - - - - - - - - - - - - -->

													</div><!--/ .animated_item-->

													<div class="animated_item">

														<a href="{{ route('cart.index') }}" class="button_grey">View Cart</a>

														<a href="index.html#" class="button_blue">Checkout</a>

													</div><!--/ .animated_item-->

											</div><!--/ .shopping_cart.dropdown-->

										<!-- - - - - - - - - - - - - - End of products list - - - - - - - - - - - - - - - - -->

									</div><!--/ .nav_item-->

									<!-- - - - - - - - - - - - - - End of navigation item - - - - - - - - - - - - - - - - -->

								</div><!--/ .sticky_inner -->

								<!-- - - - - - - - - - - - - - End of sticky container - - - - - - - - - - - - - - - - -->

							</div><!--/ [col]-->

						</div><!--/ .row-->

					</div><!--/ .container-->

				</div><!--/ .main_navigation_wrap-->

				<!-- - - - - - - - - - - - - - End of main navigation wrapper - - - - - - - - - - - - - - - - -->

			</header>
