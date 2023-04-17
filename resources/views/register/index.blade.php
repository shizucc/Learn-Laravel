@extends('layouts.base')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-signin w-100 m-auto">
            <form method='POST'>
              @csrf
              <h1 class="h3 mb-3 fw-normal text-center">Please Register</h1>
              <div class="form-floating">
                <input type="text" name='name' class="form-control @error('name') is-invalid @enderror" id="floatingInputName" placeholder="Name" value='{{old('name')}}' >
                <label for="floatingInputName">Name</label>
                @error('name')
                <div class="invalid-feedback" id='floatingInputName'>
                  {{$message}}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" name='username' class="form-control @error('username') is-invalid @enderror" id="floatingInputUsername" placeholder="Username" value='{{old('username')}}'>
                <label for="floatingInputUsername">Username</label>
              </div>
              @error('username')
                {{$message}}
                  
              @enderror
              <div class="form-floating">
                <input type="email" name='email' class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" value='{{old('email')}}'>
                <label for="floatingInput">Email address</label>
              </div>
              @error('email')
                
                  {{$message}}
                
              @enderror
              <div class="form-floating">
                <input type="password" name='password' class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" >
                <label for="floatingPassword">Password</label>
              </div>
              @error('password')
                
                  {{$message}}
                
                @enderror
        
              <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
            <small class='d-block text-center mt-3'>Already Registered? <a href="/login">Login</a></small>
          </main>
        
    </div>
</div>
@endsection