<h1> New Product</h1>
{!! Form::open(['url' => 'product')!!}
	{!! Form::label('Product Name') !!}<br/>
	{!! Form::text('name') !!}<br/>
	
	{!! Form::label('Category') !!}<br/>
	{!! Form::text('category',null) !!}<br/>
	{!! Form::label('Price') !!}<br/>
	{!! Form::text('price', null) !!}<br/><br/>
	{!! Form::submit('Add Product',['class' => 'btn btn-primary'])  !!}
{!! Form::close() !!}