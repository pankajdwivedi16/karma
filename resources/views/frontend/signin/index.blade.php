@extends('frontend.layout.master')

<!-- Dynamic Tiltile  -->
@section('title', 'Login Page')

<!-- Page Content -->
@section('content')

<div class="section-empty no-paddings">
  <div class="section-slider row-8 white">
    <div class="flexslider advanced-slider slider visible-dir-nav" data-options="animation:fade">
      <ul class="slides">
        <li data-slider-anima="fade-left" data-time="1000">
          <div class="section-slide">
            <div class="bg-cover" style="background-image:url({!! asset('assets/images/slide1.jpg') !!})"></div>
            <div class="container">
              <div class="container-middle">
                <div class="container-inner text-center">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                      <div class="col-md-12 anima">
                        <h1 class="text-white text-l heading_one">Login</h1>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="section-empty">
  <div class="container content">
    <div class="col-md-6 col-md-offset-3">
      <div class="row">
        <div class="col-md-12"> 
          <!-- Lawyer Box Open -->
          <div class="shadow_box">
            <form method="POST" id="form" class="form" action="{!! url('signin') !!}">
              {{ csrf_field() }} 
              <div class="form-group">
                <input type="text" name="email" id="email" value="{{ old('email','') }}" class="form-control" placeholder="E-mail address">
                @if($errors->has('email'))
                  <div class="error"> {{ $errors->first('email') }} </div>
                @endif
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password" value="{{ old('password','') }}" class="form-control" placeholder="Password">
                @if($errors->has('password'))
                  <div class="error"> {{ $errors->first('password') }} </div>
                @endif
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-block btn-lg btn-danger">Login</button>
              </div>
              <p class="text-center"><a href="#">Forgot Password?</a></p>
              <p class="text-center"><a href="{!! url('signup') !!}">Not a registered user? Sign Up Here</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@stop

@push('scripts')

<script src="{!! asset('assets/scripts/validate1.15.1.js')!!}" type="text/javascript"></script>
<script src="{!! asset('assets/scripts/pagejs/signin.js') !!}" type="text/javascript"></script>

@endpush