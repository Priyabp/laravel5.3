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
	

{!! Form::submit('Update Task', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}