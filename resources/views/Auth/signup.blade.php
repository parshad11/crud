@extends('index')

@section('content')
<form action="signupsubmit" method="post" >
  @csrf
  <div class="form-group">
    <label for="uname">Username:</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required><br>
    <span style="color:#E54343">@error('uname'){{$message}}@enderror</span>
  </div>
  <div class="form-group">
    <label for="uname">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required><br>
    <span style="color:#E54343">@error('email'){{$message}}@enderror</span>

  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required><br>
    <span style="color:#E54343">@error('pswd'){{$message}}@enderror</span>

  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember" required> I agree to the terms and condition of the site .
      <div class="invalid-feedback">Check this checkbox to continue.</div>
    </label>
  </div>
  <a href="loginpage" class="btn btn-primary" style="background-color:#5cd658">Already have an account</a><br><br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection