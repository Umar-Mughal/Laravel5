@extends('layouts.app')

@section('content')

<div class="secondary_page_wrapper">

		<div class="container">
						<section class="section_offset">

						<h3 class="offset_title">1. Checkout Method</h3>

						<div class="relative">

							<a class="icon_btn button_dark_grey edit_button" href="shop_checkout.html#"><i class="icon-pencil"></i></a>


							<div class="table_layout">

								<div class="table_row">

									<div class="table_cell">

										<section>

											<h4>Checkout as a Guest or Register</h4>

											<p class="subcaption">Register with us for future convenience:</p>

											<form>

												<ul>
													
													<li>

														<input type="radio" checked="" name="radio_2" id="radio_button_1">
														<label for="radio_button_1">Checkout as Guest</label>

													</li>

													<li>

														<input type="radio" name="radio_2" id="radio_button_2">
														<label for="radio_button_2">Register</label>

													</li>

												</ul>

											</form>

											<h5 class="sub bold">Register and save time!</h5>

											<p class="subcaption">Register with us for future convenience:</p>

											<ul class="list_type_7">

												<li>Fast and easy check out</li>
												<li>Easy access to your order history and status</li>

											</ul>

										</section>

									</div><!--/ .table_cell -->

									<div class="table_cell">

										<section>

											<h4>Login</h4>

											<p class="subcaption">Already registered? Please log in below:</p>

											<form id="login_form" class="type_2">

												<ul>

													<li class="row">

														<div class="col-xs-12">

															<label for="login_email" class="required">Email address</label>
															<input type="email" name="" id="login_email">

														</div>

													</li>

													<li class="row">

														<div class="col-xs-12">

															<label for="login_password" class="required">Password</label>
															<input type="password" name="" id="login_password">

														</div>

													</li>

													<li class="row">

														<div class="col-xs-12">

															<div class="on_the_sides">

																<div class="left_side">

																	<a href="shop_checkout.html#" class="small_link">Forgot your password?</a>

																</div>

																<div class="right_side">

																	<span class="prompt">Required Fields</span>

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

										<a href="shop_checkout.html#" class="button_blue middle_btn">Continue</a>

									</div><!--/ .table_cell -->

									<div class="table_cell">

										<div class="on_the_sides login_with">

											<div class="left_side">

												<button type="submit" form="login_form" class="button_blue middle_btn">Login</button>

											</div>

											<div class="right_side v_centered">

												<h4>OR Log In With</h4>

												<ul class="horizontal_list social_btns">

													<li><a href="shop_checkout.html#" class="icon_btn middle_btn social_facebook tooltip_container"><i class="icon-facebook-1"></i><span class="tooltip top">Facebook</span></a></li>

													<li><a href="shop_checkout.html#" class="icon_btn middle_btn social_twitter tooltip_container"><i class="icon-twitter"></i><span class="tooltip top">Twitter</span></a></li>

													<li><a href="shop_checkout.html#" class="icon_btn middle_btn social_googleplus tooltip_container"><i class="icon-gplus-2"></i><span class="tooltip top">GooglePlus</span></a></li>

												</ul><!--/ .horizontal_list.social_btns-->

											</div>

										</div>

									</div><!--/ .table_cell -->

								</div><!--/ .table_row -->

							</div><!--/ .table_layout -->

						</div><!--/ .relative -->

					</section>
		</div>		

</div>

@endsection

@section(footer-section)
@endsection