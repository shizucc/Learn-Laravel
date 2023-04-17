@extends('layouts.base')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-signin w-100 m-auto">
          @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{session('success')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

            <form method='POST'>
              @csrf
              <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
              <div class="form-floating">
                <input type="email" name='email' class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" name='password' class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
              </div>
              @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{session('loginError')}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
        
              <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
            <small class='d-block text-center mt-3'>Not Registered? <a href="/register">Register Now</a></small>
          </main>
        
    </div>
</div>
@endsection