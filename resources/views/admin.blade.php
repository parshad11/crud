<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product Detail</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

@section('content')
<h1>These are our produtcs</h1>
<table class="table table-hover">
<tr>
		<td>Product name</td>
		<td>Product description</td>
		<td>Image</td>
    <td>Action</td>

		
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

    <a type="button" href="{{route('viewproduct',['id'=>$product->id])}}"  class="btn btn-primary">Edit</a>
    <a type="button" href="{{route('deleteproduct',['id'=>$product->id])}}" class="btn btn-danger">Delete</a>

    </div>
    </td>
	</tr>
	@endforeach
</table>
</body>
</html>
