@foreach($categories as $category)
 <li>
    {{ $category->name }}
    @if(count($category->products))
        @foreach($category->products as $product)
        	<div style="border:1px solid black;">
        		<div><a href="#">{{$product->name}}</a></div>
	        <div><a href="#">{{$product->description}}</a></div>
	        <div><a href="#">{{$product->price}}</a></div>
	        <div><a href="#">{{$product->category_id}}</a></div>
	        <div><a href="#">{{$product->quantity}}</a></div>
	        <div><b><a href="#">{{$product->image}}</a></b></div>
        	</div>
        	
        @endforeach
     @endif 
    @if(count($category->children))
        @include('manage_subcat',['children' => $category->children])
    @endif
</li>
				           
@endforeach

<?php 
dd($categories);
