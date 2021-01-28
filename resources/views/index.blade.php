<!DOCTYPE html>
<html lang="en">
<head>
  <title>Eseller home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script><link rel="stylesheet" href="{{ url('/css/index.css') }}">
  <link href='https://fonts.googleapis.com/css?family=Hanalei' rel='stylesheet'>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
@section('header')

<nav  class="navbar navbar-dark bg-dark">
    <a class="nav-link active" id="hover"  aria-current="page" href="/">E SELLER</a>


  <form class="form-inline">
  <input type="text" value="" class="_3704LK" title="Search for products, brands and more" name="q" autocomplete="off" placeholder="Search for products, brands and more">
  <button class="L0Z3Pu" type="submit"><svg width="25" height="25" viewBox="0 0 17 18" class="" xmlns="http://www.w3.org/2000/svg"><g fill="#2874F1" fill-rule="evenodd"><path class="_34RNph" d="m11.618 9.897l4.225 4.212c.092.092.101.232.02.313l-1.465 1.46c-.081.081-.221.072-.314-.02l-4.216-4.203"></path><path class="_34RNph" d="m6.486 10.901c-2.42 0-4.381-1.956-4.381-4.368 0-2.413 1.961-4.369 4.381-4.369 2.42 0 4.381 1.956 4.381 4.369 0 2.413-1.961 4.368-4.381 4.368m0-10.835c-3.582 0-6.486 2.895-6.486 6.467 0 3.572 2.904 6.467 6.486 6.467 3.582 0 6.486-2.895 6.486-6.467 0-3.572-2.904-6.467-6.486-6.467"></path></g></svg></button>
  </form>
 
  @if(session()->has('userdata'))
  <?php
  $data=json_decode(session('userdata'));
  ?>
  <div class="dropdown">
  <button class="btn btn-secondary" type="button" data-toggle="dropdown">{{$data->name}}
  <span class="caret"></span></button>
  <ul  class="dropdown-menu">
    <li><a id="profile-button" class="btn btn-secondary" href="#">Profile</a></li>
    <li><a id="profile-button" class="btn btn-secondary" href="logoutsubmit">Logout</a></li>
  </ul>
</div>
@else
  <div > 
  <a href="loginpage" id="loginbtn" class="btn btn-secondary">Login</a>
  </div>
  @endif
</nav>


<ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="btn btn-secondary" href="#">Be a Seller</a>
    </li>
    <li class="nav-item">
      <a class="btn btn-secondary" href="enterproduct">Add yout product</a>
    </li>
  </ul>
	@show
	</div>
  <div class="imageslider">
	@section('imageslider')
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="\sliderimages\images (1).jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\sliderimages\images (2).jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\sliderimages\images (3).jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\sliderimages\images (4).jpg" alt="Fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\sliderimages\images.jpg" alt="Fifth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	@show
	</div>



	<div class="content">
	@section('content')
	<h1><h1>
	@show
	</div>
	
	<div class="footer">
	@section('footer')
	<h1>This is footer<h1>
	@show
</body>
</html>

