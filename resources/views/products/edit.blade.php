@include('errors.validationerror')
<h1> Update Product</h1>
{!! Form::model($product, [
    'method' => 'PATCH',
    'route' => ['product.update', $product->id]
]) !!}

	{!! Form::label('Product Name') !!}<br/>
	{!! Form::text('name') !!}<br/>
	
	{!! Form::label('Category') !!}<br/>
	{!! Form::text('category',null) !!}<br/>
	{!! Form::label('Price') !!}<br/>
	{!! Form::text('price', null) !!}<br/><br/>
	

{!! Form::submit('Update Product', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}