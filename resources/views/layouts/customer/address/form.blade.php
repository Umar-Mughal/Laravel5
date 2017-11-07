{{ $id }}
<section class="section_offset">

	<h3> Billing Information</h3>

	<div class="theme_box">

		<a class="icon_btn button_dark_grey edit_button" href="shop_checkout.html#"><i class="icon-pencil"></i></a>
		  @if(isset($customer_address))	

						{!! Form::model($customer_address,['id'=>'address_form']) !!}
		  @else
		    {!! Form::open(['id'=>'address_form']) !!}	
		  @endif  

                    {{ csrf_field() }}
			<ul>
				
				<li class="row">

					<div class="col-sm-6">
						
						{!! Form::label('first_name', 'First Name', ['class'=> 'required']) !!}

						{!! Form::text('first_name', null, ['id'=>'first_name']) !!}

					</div> <!--/ [col] -->

					<div class="col-sm-6">

						{!! Form::label('last_name','Last Name', ['class' => 'required']) !!}
						{!! Form::text('last_name',null, ['id'=>'last_name']) !!}

					</div><!--/ [col] -->

				</li><!--/ .row -->

				<li class="row">
					
					<div class="col-sm-6">

						{!! Form::label('phone','Phone',['class'=>'required']) !!}
						{!! Form::text('phone', null, ['id'=>'phone']) !!}

					</div><!--/ [col] -->

					<div class="col-sm-6">
						
						{!! Form::label('email','Email',['class'=>'required']) !!}
						{!! Form::text('email', null, ['id'=>'email']) !!}

					</div><!--/ [col] -->

				</li><!--/ .row -->

				<li class="row">	

					<div class="col-xs-12">

						{!! Form::label('address','Address',['class'=>'required']) !!}
						{!! Form::text('address', null, ['id'=>'address']) !!}

					</div><!--/ [col] -->

				</li><!-- / .row -->

				<li class="row">

					<div class="col-xs-12">

						<input type="text" name="">

					</div><!--/ [col] -->

				</li><!--/ .row -->

				<li class="row">

					<div class="col-sm-6">
						
						{!! Form::label('city','City',['class'=>'required']) !!}
						{!! Form::text('city', null, ['id'=>'city']) !!}

					</div> <!--/ [col] -->

					<div class="col-sm-6">

						{{ Form::Label('state','Stae/Province', ['class'=>'required']) }}
							
					    {!! Form::select('state',
							    [
							     'Punjab'=>'Punjab', 
							     'Sindh'=>'Sindh',
							     'Khebar Pakhtunhwan'=>'Khebar Pakhtunhwan', 'Balochistan'=>'Balochistan'
							     ]
							    ) !!}
						

					</div><!--/ [col] -->

				</li><!--/ .row -->

				<li class="row">

					<div class="col-sm-6">

						{!! Form::label('postal_code','Postal Code',['class'=>'required']) !!}
						{!! Form::text('postal_code', null, ['id'=>'postal_code']) !!}

					</div><!--/ [col] -->



				</li><!--/ .row -->

			</ul>

		{{ Form::close() }}

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
		var id={{ $id }}
		$.ajax({
			url:'billing-address',
			type:"POST",
			data:{first_name:first_name,last_name:last_name,phone:phone,email:email,address:address,city:city,postal_code:postal_code,_token:_token, id:id},
			success:function(data){
				 route('customer_account');
			},
			error:function(jqXHR, textStatus, errorThrown){
						// alert(errorThrown);
						alert(errorThrown);
				}
		});
	});
</script>


