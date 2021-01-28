@extends('index')

@section('content')

<div>
<form action="{{route('updateproduct',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
@csrf
<input type="hidden" name="id" value="{{$data->id}}">
  <div class="form-group">
    <label for="Product Name">Product Name:</label>
    <input type="text" class="form-control" placeholder="Enter Product name" name="productname" value="{{$data->productname}}" />
  </div>
  <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" name="productdescription" id="floatingTextarea2" style="height: 150px" >{{$data->productdescription}}</textarea>
  <label for="floatingTextarea2">Product description</label>
</div><br><br>

<div class="form-group">
  <!-- <?php
    $imageFile=json_decode($data->image);
    
  ?> -->
    <label for="upload file">Update Product Image:</label>
    <input type="file" accept="image/*" name="image" value="/image/{{$imageFile}}"  onchange="loadFile(event)">
    <img id="output" />

  </div>
<br><br>
  <button type="submit" class="btn btn-primary" name="submitproduct">Post product</button>
</form>

</div>

<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src)
    }
  };
</script>
@endsection