<table>
<th>Product Name</th>
<th>Category</th>
<th>Price</th>
<tbody>
@foreach($products as $products)
	<tr>
	 <td> {!! $products->name !!}</td>
	 <td> {!! $products->category !!}</td>
	 <td> {!! $products->price !!}</td>
	</tr>

@endforeach
</tbody>
</table>