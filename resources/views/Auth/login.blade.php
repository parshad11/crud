@extends('index')

@section('content')
<form action="loginsubmit" method="post" >
@csrf
  <div class="form-group">
    <label for="uname">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>

  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>

  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember" required>I agree to the term and confition of this site.

    </label>
  </div>
  <a href="signuppage" class="btn btn-primary" style="background-color:#f06960">Sign up if you are new to our site</a><br><br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection