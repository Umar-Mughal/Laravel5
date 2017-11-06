<section class="section_offset">

	<h3> Billing Information</h3>

	<div class="theme_box">

		<a class="icon_btn button_dark_grey edit_button" href="shop_checkout.html#"><i class="icon-pencil"></i></a>

		<form id="address_form" class="type_2">
                    {{ csrf_field() }}
			<ul>
				
				<li class="row">
					
					<div class="col-sm-6">
						
						<label for="first_name" class="required">First Name</label>
						<input type="text" name="first_name" id="first_name">

					</div><!--/ [col] -->

					<div class="col-sm-6">
						
						<label for="last_name" class="required">Last Name</label>
						<input type="text" name="last_name" id="last_name">

					</div><!--/ [col] -->

				</li><!--/ .row -->

				<li class="row">
					
					<div class="col-sm-6">

						<label for="phone" class="required">Phone</label>
						<input type="text" name="phone" id="phone">

					</div><!--/ [col] -->

					<div class="col-sm-6">
						
						<label for="email" class="required">Email Address</label>
						<input type="text" name="email" id="email">

					</div><!--/ [col] -->

				</li><!--/ .row -->

				<li class="row">	

					<div class="col-xs-12">

						<label for="address" class="required">Address</label>
						<input type="text" name="address" id="address">

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
						<input type="text" name="city" id="city">

					</div><!--/ [col] -->

					<div class="col-sm-6">

						<label class="required">State/Province</label>

						<div class="custom_select"><div class="active_option open_select">Alabama</div><ul class="options_list dropdown"><li class="animated_item" style="transition-delay:0.1s"><a href="#">Alabama</a></li><li class="animated_item" style="transition-delay:0.2s"><a href="#">Illinois</a></li><li class="animated_item" style="transition-delay:0.3s"><a href="#">Kansas</a></li></ul>

							<select name="state" style="display: none;">

								<option value="Alabama">Alabama</option>
								<option value="Illinois">Illinois</option>
								<option value="Kansas">Kansas</option>

							</select>

						</div>

					</div><!--/ [col] -->

				</li><!--/ .row -->

				<li class="row">

					<div class="col-sm-6">

						<label for="postal_code" class="required">Zip/Postal Code</label>
						<input type="text" name="postal_code" id="postal_code">

					</div><!--/ [col] -->



				</li><!--/ .row -->

			</ul>

		</form>

	</div>

	<footer class="bottom_box on_the_sides">

		<div class="left_side">

			<!-- <a href="shop_checkout.html#" class="button_blue middle_btn">Save</a> -->

			
			<button type="submit" id="submit" class="button_blue middle_btn" form="address_form">Save</button>

			<a href="{{ route('customer_account') }}" class="button_blue middle_btn">Back</a>


		</div>

		<div class="right_side">

			<span class="prompt">Required Fields</span>

		</div>

	</footer>

</section>

<script>
	$("#address_form").submit(function(){
		var first_name=$("#first_name").val();
		var last_name=$("#last_name").val();
		var phone=$("#phone").val();
		var email=$("#email").val();
		var address=$("#address").val();
		var city=$("#city").val();
		var state=$("#state").val();
		var postal_code=$("#postal_code").val();
		var _token=$("input[name=_token]").val();
		$.ajax({
			url:'billing-address',
			type:"POST",
			data:{first_name:first_name,last_name:last_name,phone:phone,email:email,address:address,city:city,postal_code:postal_code,_token:_token},
			success:function(data){
				alert(data);
			},
			error:function(status){
				alert("request faild");
			}
		});
	});
</script>


