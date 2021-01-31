@extends('index')

@section('content')
<h1>These are our produtcs</h1>
<table class="table table-hover">
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
    <td>
    <div class="btn-group" role="group" aria-label="Basic mixed styles example">

    </div>
    </td>
	</tr>
	@endforeach
</table>




@endsection