<h1>Products Details</h1>

@foreach($products as $products)
	 <b>Product Name </b>: {!! $products->name !!}<br/>
	 <b>Category </b>: {!! $products->category !!}<br/>
	 <b>Price </b>: {!! $products->price !!}
	<br/><br/>
	 <p class="btn btn-primary">{!! link_to_route('product.edit','UPDATE',[$products->id] )!!}</p>
	 {!! link_to_route('product.destroy','DELETE',[$products->id] )!!}

	 <hr>
	

@endforeach
