@extends('layouts.master')

@section('title')
   <title>Login ke Qur'anKu</title> 
@endsection

@section('content')
  <div class="container container-form">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form form method="POST" action="/login" class="form-signin">
              {{ csrf_field() }}
              <div class="form-label-group">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>
                <label for="email">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                <label for="password">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-login btn-lg btn-primary btn-block text-uppercase" type="submit">Login</button>
              <hr class="my-4">
              <a class="btn btn-lg btn-register btn-block text-uppercase" href="/register">Register</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection