<ul>
@foreach($children as $child)
	<li>
	    {{ $child->name }}
	    @if(count($child->products))
        @foreach($child->products as $product)
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
	    @if(count($child->children))
            @include('manage_subcat',['children' => $child->children])
        @endif
	</li>
@endforeach
</ul>