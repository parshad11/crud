@extends('index')

@section('content')
<h1>These are our produtcs</h1>
<table border="1">
<tr>
		<td>Product name</td>
		<td>Product description</td>
		<td>Image</td>

		
	</tr>
	@foreach ($products as $product)
    <?php 
        $imageFile = json_decode($product->image);
        ?>
	<tr>
		<td>{{$product['productname']}} </td>
		<td>{{$product['productdescription']}}</td>
		<td><img src="/image/{{$imageFile}}"  ></td>
	</tr>
	@endforeach
</table>


@endsection