@extends('layouts.app')

@section('content')

<div class="secondary_page_wrapper">

				<div class="container">

					<!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

					<!-- <ul class="breadcrumbs">

						<li><a href="index.html">Home</a></li>
						<li><a href="product_page_v2.html#">Beauty</a></li>
						<li><a href="product_page_v2.html#">Skin Care</a></li>
						<li><a href="product_page_v2.html#">Cleansers</a></li>
						<li><a href="product_page_v2.html#">Liquid</a></li>
						<li>Metus nulla facilisi, Original 24 fl oz (709 ml)</li>

					</ul> -->

					<!-- - - - - - - - - - - - - - End of breadcrumbs - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product images & description - - - - - - - - - - - - - - - - -->

					<section class="section_offset">

						<div class="clearfix">

							<!-- - - - - - - - - - - - - - Product image column - - - - - - - - - - - - - - - - -->

							<div class="single_product">

								<!-- - - - - - - - - - - - - - Image preview container - - - - - - - - - - - - - - - - -->

								<div class="image_preview_container">

									<img id="img_zoom" data-zoom-image="images/qv_large_1.JPG" src="{{ asset('storage/images/' .$product->image)}}" alt="">

									<button class="button_grey_2 icon_btn middle_btn open_qv"><i class="icon-resize-full-6"></i></button>

								</div><!--/ .image_preview_container-->

								<!-- - - - - - - - - - - - - - End of image preview container - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Prodcut thumbs carousel - - - - - - - - - - - - - - - - -->
								
								<div class="product_preview">

									<div class="owl_carousel owl-carousel thumbnails_carousel owl-loaded" id="thumbnails">
										
										

										

										

										

									<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0s; width: 360px;"><div class="owl-item active first" style="width: 80px; margin-right: 10px;"><a href="product_page_v2.html#" data-image="images/qv_img_1.jpg" data-zoom-image="images/qv_large_1.JPG" style="height: 0px;">

											<img src="images/qv_thumb_1.jpg" data-large-image="images/qv_img_1.jpg" alt="">

										</a></div><div class="owl-item active" style="width: 80px; margin-right: 10px;"><a href="product_page_v2.html#" data-image="images/qv_img_2.jpg" data-zoom-image="images/qv_large_2.jpg" style="height: 0px;">

											<img src="images/qv_thumb_2.jpg" data-large-image="images/qv_img_2.jpg" alt="">

										</a></div><div class="owl-item active last" style="width: 80px; margin-right: 10px;"><a href="product_page_v2.html#" data-image="images/qv_img_3.jpg" data-zoom-image="images/qv_large_3.jpg" style="height: 0px;">

											<img src="images/qv_thumb_3.jpg" data-large-image="images/qv_img_3.jpg" alt="">

										</a></div><div class="owl-item" style="width: 80px; margin-right: 10px;"><a href="product_page_v2.html#" data-image="images/qv_img_4.jpg" data-zoom-image="images/qv_large_4.JPG" style="height: 0px;">

											<img src="images/qv_thumb_4.jpg" data-large-image="images/qv_img_4.jpg" alt="">

										</a></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style=""></div><div class="owl-next" style=""></div></div><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div></div><!--/ .owl-carousel-->

								</div><!--/ .product_preview-->
								
								<!-- - - - - - - - - - - - - - End of prodcut thumbs carousel - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Share - - - - - - - - - - - - - - - - -->
								
								<div class="v_centered">

									<span class="title">Share this:</span>

									<div class="addthis_widget_container">
										<!-- AddThis Button BEGIN -->
										<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
										<a class="addthis_button_preferred_1"></a>
										<a class="addthis_button_preferred_2"></a>
										<a class="addthis_button_preferred_3"></a>
										<a class="addthis_button_preferred_4"></a>
										<a class="addthis_button_compact"></a>
										<a class="addthis_counter addthis_bubble_style"></a>
										</div>
										<!-- AddThis Button END -->
									</div>
									
								</div>
								
								<!-- - - - - - - - - - - - - - End of share - - - - - - - - - - - - - - - - -->

							</div>

							<!-- - - - - - - - - - - - - - End of product image column - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product description column - - - - - - - - - - - - - - - - -->

							<div class="single_product_description">

								<h3 class="offset_title"><a href="product_page_v2.html#">{{ $product->name }}</a></h3>

								<!-- - - - - - - - - - - - - - Page navigation - - - - - - - - - - - - - - - - -->

								<div class="page-nav">

									<a href="product_page_v2.html#" class="page-prev"></a>
									<a href="product_page_v2.html#" class="page-next"></a>

								</div>

								<!-- - - - - - - - - - - - - - End of page navigation - - - - - - - - - - - - - - - - -->

								<div class="description_section v_centered">

									<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
								
									<ul class="rating">

										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li></li>
										<li></li>

									</ul>
										
									<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

									<ul class="topbar">

										<li><a href="product_page_v2.html#">3 Review(s)</a></li>
										<li><a href="product_page_v2.html#">Add Your Review</a></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

								</div>

								<div class="description_section">

									<table class="product_info">

										<tbody>

											<tr>

												<td>Manufacturer: </td>
												<td><a href="product_page_v2.html#">Chanel</a></td>

											</tr>

											<tr>

												<td>Availability: </td>
												<td><span class="in_stock">in stock</span> 20 item(s)</td>

											</tr>

											<tr>

												<td>Product Code: </td>
												<td>{{ $product->code }}</td>

											</tr>

										</tbody>

									</table>

								</div>

								<hr>

								<div class="description_section">

									<p>{{ $product->description }}</p>

								</div>

								<hr>

								<p class="product_price"><s>$9.99</s> <b class="theme_color">${{$product->price}}</b></p>

								<!-- - - - - - - - - - - - - - Product size - - - - - - - - - - - - - - - - -->

								<div class="description_section_2 v_centered">
									
									<span class="title">Size:</span>

									<div class="custom_select min"><div class="active_option open_select">Small</div><ul class="options_list dropdown"><li class="animated_item" style="transition-delay:0.1s"><a href="#">Small</a></li><li class="animated_item" style="transition-delay:0.2s"><a href="#">Middle</a></li><li class="animated_item" style="transition-delay:0.3s"><a href="#">Big</a></li></ul>

										<select style="display: none;">

											<option value="Small">Small</option>
											<option value="Middle">Middle</option>
											<option value="Big">Big</option>

										</select>

									</div>

								</div>

								<!-- - - - - - - - - - - - - - End of product size - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Quantity - - - - - - - - - - - - - - - - -->

								<div class="description_section_2 v_centered">
									
									<span class="title">Qty:</span>

									<div class="qty min clearfix">

										<button class="theme_button" data-direction="minus">-</button>
										<input type="text" name="" value="1">
										<button class="theme_button" data-direction="plus">+</button>

									</div>

								</div>

								<!-- - - - - - - - - - - - - - End of quantity - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

								<div class="buttons_row">

									<button class="button_blue middle_btn">Add to Cart</button>

									<button class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>

									<button class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

								</div>

								<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

							</div>

							<!-- - - - - - - - - - - - - - End of product description column - - - - - - - - - - - - - - - - -->

						</div>

					</section><!--/ .section_offset -->

					<!-- - - - - - - - - - - - - - End of product images & description - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Infoblocks - - - - - - - - - - - - - - - - -->

					<div class="section_offset">

						<div class="row">

							<div class="col-sm-4">

								<!-- - - - - - - - - - - - - - Infoblock - - - - - - - - - - - - - - - - -->

								<section class="infoblock type_3">

									<div class="clearfix">

										<i class="icon-thumbs-up-1"></i>

										<h4 class="caption">The Highest<br>Product Quality</h4>

									</div>

									<p>Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. <a href="product_page_v2.html#">Read More.</a></p>

								</section><!--/ .infoblock.type_3 -->

								<!-- - - - - - - - - - - - - - End of infoblock - - - - - - - - - - - - - - - - -->

							</div><!--/ [col]-->

							<div class="col-sm-4">

								<!-- - - - - - - - - - - - - - Infoblock - - - - - - - - - - - - - - - - -->

								<section class="infoblock type_3">

									<div class="clearfix">

										<i class="icon-money"></i>

										<h4 class="caption">100% Money<br>Back Guaranteed</h4>

									</div>

									<p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. <a href="product_page_v2.html#">Read More.</a></p>

								</section><!--/ .infoblock.type_3 -->

								<!-- - - - - - - - - - - - - - End of infoblock - - - - - - - - - - - - - - - - -->

							</div><!--/ [col]-->

							<div class="col-sm-4">

								<!-- - - - - - - - - - - - - - Infoblock - - - - - - - - - - - - - - - - -->

								<section class="infoblock type_3">

									<div class="clearfix">

										<i class="icon-lock"></i>

										<h4 class="caption">Safe &amp; Secure<br>Payment</h4>

									</div>

									<p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <a href="product_page_v2.html#">Read More.</a></p>

								</section><!--/ .infoblock.type_3 -->

								<!-- - - - - - - - - - - - - - End of infoblock - - - - - - - - - - - - - - - - -->

							</div><!--/ [col]-->

						</div><!--/ .row -->

					</div><!--/ .section_offset -->

					<!-- - - - - - - - - - - - - - End of infoblocks - - - - - - - - - - - - - - - - -->


				</div><!--/ .container-->

			</div>

@endsection