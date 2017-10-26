@extends('layouts.app')

@section('content')

	<div class="secondary_page_wrapper">

				<div class="container">

					<!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

					<ul class="breadcrumbs">

						<li><a href="index.html">Home</a></li>
						<li>Shopping Cart</li>

					</ul>

					<section class="section_offset">

						<h1>Shopping Cart</h1>

						<!-- - - - - - - - - - - - - - Shopping cart table - - - - - - - - - - - - - - - - -->

						<div class="table_wrap">

							<table class="table_type_1 shopping_cart_table">

								<thead>

									<tr>
										<th class="product_image_col">Product Image</th>
										<th class="product_title_col">Product Name</th>
										<th>Product Code</th>
										<th>Price</th>
										<th class="product_qty_col">Quantity</th>
										<th>Total</th>
										<th class="product_actions_col">Action</th>
									</tr>

								</thead>

								<tbody>
									@foreach($cart_items as $item)
									<tr>

										<!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
											
										<td class="product_image_col" data-title="Product Image">
											
											<a href="shop_shopping_cart.html#"><img src="{{('storage/images/' .$item->options->image)}}" alt=""></a>

										</td>

										<!-- - - - - - - - - - - - - - End of product Image - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product name - - - - - - - - - - - - - - - - -->

										<td data-title="Product Name">

											<a href="shop_shopping_cart.html#" class="product_title">{{ $item->name }}</a>

											<!-- <ul class="sc_product_info">

												<li>Size: Big</li>
												<li>Color: Red</li>

											</ul> -->

										</td>

										<!-- - - - - - - - - - - - - - End of product name - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - SKU - - - - - - - - - - - - - - - - -->

										<td data-title="Code">

											{{ $item->options->code }}

										</td>

										<!-- - - - - - - - - - - - - - End of SKU - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->

										<td class="subtotal" data-title="Price">
											
											${{$item->price}}

										</td>

										<!-- - - - - - - - - - - - - - End of Price - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Quantity - - - - - - - - - - - - - - - - -->

										<td data-title="Quantity">

											<div class="qty min clearfix">

												<button class="theme_button" data-direction="minus">-</button>
												<input type="text" name="qty" value="{{ $item->qty }}" form="myForm">
												<button class="theme_button" data-direction="plus">+</button>

											</div><!--/ .qty.min.clearfix-->

										</td>

										<!-- - - - - - - - - - - - - - End of quantity - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Total - - - - - - - - - - - - - - - - -->

										<td class="total" data-title="Total">

											{{ $item->total() }}

										</td>

										<!-- - - - - - - - - - - - - - End of total - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Action - - - - - - - - - - - - - - - - -->

										<td data-title="Action">

											<!-- <a href="shop_shopping_cart.html#" class="button_dark_grey icon_btn edit_product"><i class="fa fa-refresh" style="margin-top:8px;"></i></a> -->

					{!! Form::open([
	                 'method'=>'PUT',
	                 'url' => ['cart', $item->rowId],
	                 'style' => 'display:inline',
	                 'id' => 'myForm' 
	             	]) !!}
	             				
				 

	                 {!! Form::button('<span class="button_dark_grey icon_btn edit_product"><i class="fa fa-refresh" style="margin-top:8px;"></i></span>', array(
	                         'type' => 'submit',
	                         'class' => '',
	                         'title' => 'Update Product'
	                 )) !!}
	             {!! Form::close() !!}



				{!! Form::open([

                 'method'=>'DELETE',
                 'url' => ['cart', $item->rowId],
                 'style' => 'display:inline'
             	]) !!}
                 {!! Form::button('<span class="button_dark_grey icon_btn remove_product"><i class="icon-cancel-2"></i></span>', array(
                         'type' => 'submit',
                         'class' => '',
                         'title' => 'Remove Product',
                         'onclick'=>'return confirm("Confirm Remove?")'
                 )) !!}
             {!! Form::close() !!}

										</td>

										<!-- - - - - - - - - - - - - - End of action - - - - - - - - - - - - - - - - -->

									</tr>

									@endforeach

								</tbody>

							</table>

						</div><!--/ .table_wrap -->

						<footer class="bottom_box on_the_sides">

							<div class="left_side">

								<a href="{{ route('home') }}" class="button_blue middle_btn">Continue Shopping</a>

							</div>

							<div class="right_side">

								<a href="{{ route('empty.cart')}}" class="button_grey middle_btn">Clear Shopping Cart</a>

							</div>

						</footer><!--/ .bottom_box -->

						<!-- - - - - - - - - - - - - - End of shopping cart table - - - - - - - - - - - - - - - - -->

					</section><!--/ .section_offset -->

					<div class="section_offset">

						<div class="row">

							<section class="col-sm-4">

								<h3>Discount Codes</h3>

								<div class="theme_box">

									<p class="form_caption">Enter your coupon code if you have one.</p>

									<form id="discount_code">

										<ul>

											<li class="row">

												<div class="col-xs-12">

													<input type="text" name="">

												</div>

											</li>

										</ul>

									</form>

								</div><!--/ .theme_box -->

								<footer class="bottom_box">

									<button type="submit" form="discount_code" class="button_grey middle_btn">Apply Coupon</button>

								</footer>

							</section><!--/ [col] -->

							<section class="col-sm-4">

								<h3>Estimate Shipping and Tax</h3>

								<div class="theme_box">

									<p class="form_caption">Enter your destination to get a shipping estimate.</p>

									<form id="estimate_shipping" class="type_2">

										<ul>

											<li class="row">
												
												<div class="col-xs-12">

													<label>Country</label>

													<div class="custom_select"><div class="active_option open_select">USA</div><ul class="options_list dropdown"><li class="animated_item" style="transition-delay:0.1s"><a href="#">Australia</a></li><li class="animated_item" style="transition-delay:0.2s"><a href="#">Austria</a></li><li class="animated_item" style="transition-delay:0.3s"><a href="#">Argentina</a></li><li class="animated_item" style="transition-delay:0.4s"><a href="#">Canada</a></li><li class="animated_item" style="transition-delay:0.5s"><a href="#">USA</a></li></ul>

														<select style="display: none;">
															
															<option value="Australia">Australia</option>
															<option value="Austria">Austria</option>
															<option value="Argentina">Argentina</option>
															<option value="Canada">Canada</option>
															<option selected="" value="USA">USA</option>

														</select>

													</div>

												</div>

											</li>

											<li class="row">
												
												<div class="col-lg-7 col-md-6">

													<label>State/Province</label>

													<div class="custom_select"><div class="active_option open_select">Alabama</div><ul class="options_list dropdown"><li class="animated_item" style="transition-delay:0.1s"><a href="#">Alabama</a></li><li class="animated_item" style="transition-delay:0.2s"><a href="#">Illinois</a></li><li class="animated_item" style="transition-delay:0.3s"><a href="#">Kansas</a></li></ul>

														<select style="display: none;">

															<option value="Alabama">Alabama</option>
															<option value="Illinois">Illinois</option>
															<option value="Kansas">Kansas</option>

														</select>

													</div>

												</div><!--/ [col] -->

												<div class="col-lg-5 col-md-6">

													<label for="postal_code">Zip/Postal Code</label>
													<input type="text" name="" id="postal_code">

												</div><!--/ [col] -->

											</li>

										</ul>

									</form>

								</div><!--/ .theme_box -->

								<footer class="bottom_box">

									<button type="submit" form="estimate_shipping" class="button_grey middle_btn">Get a Quote</button>

								</footer><!--/ .bottom_box -->

							</section><!--/ [col] -->

							<section class="col-sm-4">

								<h3>Total</h3>

								<div class="table_wrap">

									<table class="zebra">

										<tfoot>

											<tr>
													
												<td>Subtotal</td>
												<td>{{ Cart::subtotal() }}</td>

											</tr>

											<tr class="total">
													
												<td>Total</td>
												<td>{{ Cart::total() }}</td>

											</tr>

										</tfoot>

									</table>

								</div>

								<footer class="bottom_box">

									<a class="button_blue middle_btn" href="shop_shopping_cart.html#">Proceed to Checkout</a>

									<div class="single_link_wrap">

										<a href="shop_shopping_cart.html#">Checkout with Multiple Addresses</a>

									</div>

								</footer>

							</section><!-- / [col] -->

						</div><!--/ .row -->

					</div><!--/ .section_offset -->

				</div><!--/ .container-->

			</div>

@endsection