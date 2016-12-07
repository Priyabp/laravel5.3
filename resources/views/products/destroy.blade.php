@section('content')

<h1>{{ $product->name }}</h1>
<p class="lead">{{ $product->category }}</p>
<hr>

<div class="row">
    <div class="col-md-6">
        <a href="{{ route('product.index') }}" class="btn btn-info">Back to all products</a>
       
    </div>
    <div class="col-md-6 text-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['product.destroy', $product->id]
        ]) !!}
            {!! Form::submit('Delete this product?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
</div>

@stop