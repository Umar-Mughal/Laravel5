<div class="tabs type_2 products">

    <ul class="tabs_nav clearfix">
    	@foreach($children->take(4) as $child)
        <li><a href="#tab-{{$child->id}}"> {{ $child->name }} </a></li>
        @endforeach
    </ul>

    <div class="tab_containers_wrap">
        @foreach($children->take(4) as $child)
        <div id="tab-{{$child->id}}" class="tab_container">

            <!-- - - - - - - - - - - - - - Carousel of featured products - - - - - - - - - - - - - - - - -->

            <div class="owl_carousel carousel_in_tabs">
                
                
                	@if(count($child->products))
                	   @foreach($child->products->take(4) as $product)

                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
				
                <div class="product_item type_2">

                    <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                    <div class="image_wrap">

                        <img src="{{ asset('storage/images/' .$product->image)}}" alt="image">

                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                        <div class="actions_wrap">

                            <div class="centered_buttons">

                                <a href="{{ route('single.product',$product->id)}}" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                            </div><!--/ .centered_buttons -->

                        </div><!--/ .actions_wrap-->
                        
                        <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                    </div><!--/. image_wrap-->

                    <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                    <div class="label_new">New</div>

                    <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                    <div class="description">

                        <a href="index.html#">{{ str_limit($product->description,50) }}</a>

                        <div class="clearfix product_info">

                            <p class="product_price alignleft"><b>${{ $product->price }}</b></p>

                        </div>

                    </div>

                    <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                    <div class="buttons_row">

                        <button class="button_blue middle_btn"><a href="{{ route('add.to.cart', $product->id) }}" style="color:white;">Add to Cart</a></button>

                        <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                        
                        <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                    </div>

                    <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                </div><!--/ .product_item-->

                
                <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->
                       @endforeach

                	@endif


                

                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

               


                

            </div><!--/ .sh_container-->
            
            <!-- - - - - - - - - - - - - - End of carousel of featured products - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

            <footer class="bottom_box">

                <a href="" class="button_grey middle_btn">View All Products</a>

            </footer>

            <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

        </div><!--/ #tab-1-->
        @endforeach
    </div>         

</div>
	    

