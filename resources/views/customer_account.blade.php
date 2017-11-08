@extends('layouts.app')
@section('content')

<div class="secondary_page_wrapper">

				<div class="container">

					<!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

					<ul class="breadcrumbs">

						<li><a href="index.html">Home</a></li>
						<li>My Account</li>

					</ul>

					<!-- - - - - - - - - - - - - - End of breadcrumbs - - - - - - - - - - - - - - - - -->

					<div class="row">

						<aside class="col-md-3 col-sm-4">

							<!-- - - - - - - - - - - - - - Information - - - - - - - - - - - - - - - - -->

							<section class="section_offset">

								<h3>My Account</h3>

								<ul class="theme_menu">

									<li class="active"><a href="{{ route('customer_account') }}">Account Dashboard</a></li>
									<li><a href="shop_my_account.html#">Account Information</a></li>
									<li><a href="shop_my_account.html#">Address Book</a></li>
									<li><a href="shop_my_account.html#">My Orders</a></li>
									<li><a href="shop_my_account.html#">Billing Agreements</a></li>
									<li><a href="shop_my_account.html#">Recurring Profiles</a></li>
									<li><a href="shop_my_account.html#">My Product Reviews</a></li>
									<li><a href="shop_my_account.html#">My Tags</a></li>
									<li><a href="shop_my_account.html#">My Wishlist</a></li>
									<li><a href="shop_my_account.html#">My Applications</a></li>
									<li><a href="shop_my_account.html#">Newsletter Subscriptions</a></li>
									<li><a href="shop_my_account.html#">My Downloadable Products</a></li>

								</ul>

							</section><!--/ .section_offset -->

							<!-- - - - - - - - - - - - - - End of information - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

							<div class="section_offset">

								<a href="shop_my_account.html#" class="banner">
									
									<img src="images/banner_img_10.png" alt="">

								</a>

							</div>

							<!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

						</aside><!--/ [col]-->

						<main class="col-md-9 col-sm-8" id="main_area">

							<h1>My Dashboard</h1>

							<section class="theme_box">

								<h4>Hello, {{ Auth::user()->first_name }} </h4>

								<p>From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>

							</section><!--/ .theme_box -->

							<!-- - - - - - - - - - - - - - Contact information - - - - - - - - - - - - - - - - -->
       @foreach($cstmr_acnt_info as $cstmr)
							<section class="theme_box">

								<h4>Contact Information</h4>
									

								<p>{{ $cstmr->first_name }}<br><a href="shop_my_account.html#" class="mail_to">{{ $cstmr->email }}</a></p>

								<div class="buttons_row">

									<a href="shop_my_account.html#" class="button_grey middle_btn">Edit Account Information</a>

									<a href="shop_my_account.html#" class="button_grey middle_btn">Change Password</a>

								</div>

							</section><!--/ .theme_box -->
							@endforeach
							<!-- - - - - - - - - - - - - - End of contact information - - - - - - - - - - - - - - - - -->

							<div class="table_layout">

								<div class="table_row">
									
									<div class="table_cell">

										<!-- - - - - - - - - - - - - - Newsletter - - - - - - - - - - - - - - - - -->

										<section>

											<h4>Newsletter</h4>

											<p>You are currently not subscribed to any newsletter.</p>

											<a href="shop_my_account.html#" class="button_grey middle_btn">Edit Subscription</a>

										</section>

										<!-- - - - - - - - - - - - - - End of newsletter - - - - - - - - - - - - - - - - -->

									</div><!--/ .table_cell -->

									<div class="table_cell">

										<!-- - - - - - - - - - - - - - Address book - - - - - - - - - - - - - - - - -->

										<section>

											<h4>Address Book</h4>

											<p>Here you can manage your addresess.</p>

											<a href="shop_my_account.html#" class="button_grey middle_btn">Manage Addresses</a>

										</section>

										<!-- - - - - - - - - - - - - - End of address book - - - - - - - - - - - - - - - - -->

									</div><!--/ .table_cell -->

								</div><!--/ .table_row -->

								<div class="table_row">
									
									<div class="table_cell">

										<!-- - - - - - - - - - - - - - Default billing address - - - - - - - - - - - - - - - - -->

										
										   <section>
														<h4>Default Billing Address</h4>

										   	@forelse($billing_address as $adrs)

															@include('layouts.customer.address.show_address'); <!-- table to show address data -->

															<button class="button_grey middle_btn edit_address" data-edit-address="2">Edit Address</button>
															<button id="edit_billing_addrs" class="button_grey middle_btn">Delete Address</button>

													@empty

														<p>You have not set a default billing address.</p>

														<!-- <a href="shop_my_account.html#" class="button_grey middle_btn">Edit Address</a> -->
														<button class="button_grey middle_btn add_address" data-add-address="2">Add Address</button>

												 @endforelse

										</section>

										

										<!-- - - - - - - - - - - - - - End of default billing address - - - - - - - - - - - - - - - - -->

									</div><!--/ .table_cell -->

									<div class="table_cell">

										<!-- - - - - - - - - - - - - - Default shipping address - - - - - - - - - - - - - - - - -->

										   <section>
														<h4>Default Shipping Address</h4>

										   	@forelse($shipping_address as $adrs)

																	@include('layouts.customer.address.show_address'); <!-- table to show address data -->
																	
																	<button class="button_grey middle_btn edit_address" data-edit-address="3">Edit Address</button>
																	<button id="edit_billing_addrs" class="button_grey middle_btn">Delete Address</button>

												  @empty

																<p>You have not set a default shipping address.</p>

																<button class="button_grey middle_btn add_address" data-add-address="3" >Add Address</button>

														@endforelse		
												
								 		</section>
										

										<!-- - - - - - - - - - - - - - End of default shipping address - - - - - - - - - - - - - - - - -->

									</div><!--/ .table_cell -->

								</div><!--/ .table_row -->

							</div><!--/ .table_layout -->

						</main><!--/ [col]-->

					</div><!--/ .row-->

				</div><!--/ .container-->

			</div>
@endsection

@section('footer-content')

<script>	
		$('.add_address').click(function(){
     
   var address_type=$(this).attr('data-add-address');
			$.ajax({
				url:'address',
				type:"GET",
				data:{address_type:address_type},
				success:function(data){
					
					@if(Auth::guest())
						window.location.href = "{{ route('login') }}";

     @else
						$('#main_area').html(data);

					@endif

				},

				error:function(jqXHR, textStatus, errorThrown){
					alert(errorThrown);
				}

			});

		});
			

		$(".edit_address").click(function(){
			   var address_type=$(this).attr('data-edit-address');
			   // var address_type1=$(this).attr('data-edit-address');
						$.ajax({
								url:'address/'+address_type+'/edit',
								type:"GET",
								success:function(data){

									$("#main_area").html(data);
         if(address_type==2)
        			 $("#address_heading").text('Edit Billing Information');
         if(address_type==3){
        	  	$("#address_heading").text('Edit Shipping Information');
        	}	

								},

								error:function(jqXHR, textStatus, errorThrown){
										alert(errorThrown);
								}
						});

		});
</script>
<script></script>

@endsection