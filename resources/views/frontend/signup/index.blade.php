@extends('frontend.layout.master')
<!-- Dynamic Tiltile  -->
@section('title', 'Signup Page')
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
                        <h1 class="text-white text-l heading_one">Sign Up</h1>
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
            <form method="POST" id="form" class="form" action="{!! url('signup') !!}" >
               {{ csrf_field() }} 
               <div class="form-group">
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Full Name" value="{{old('name', '')}}">
                @if($errors->has('name'))
				    <div class="error">{{ $errors->first('name') }}</div>
				@endif
              </div>

              <div class="form-group">
                <input type="text" name="email" id="email" class="form-control" placeholder="Enter e-mail address" value="{{old('email', '')}}">
                @if($errors->has('email'))
				    <div class="error">{{ $errors->first('email') }}</div>
				@endif
              </div>
              <div class="form-group">
                <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter your mobile number" value="{{old('mobile', '')}}">
                @if($errors->has('mobile'))
				    <div class="error">{{ $errors->first('mobile') }}</div>
				@endif
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
                @if($errors->has('password'))
				    <div class="error">{{ $errors->first('password') }}</div>
				@endif
              </div>
              <div class="form-group">
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Enter confirm password" value="{{old('password_confirmation', 'ww')}}">
                @if($errors->has('password_confirmation'))
				    <div class="error">{{ $errors->first('password_confirmation') }}</div>
				@endif
              </div>
              <div class="form-group">
                <button type="submit" name="submit" id="submit" class="btn btn-block btn-lg btn-danger">Sign Up</button>
              </div>
              <p class="text-center"><a href="#!">Are you a lawyer? Click here To register.</a></p>
              <p class="text-center"><a href="{!! url('signin') !!}">Already have an account? Take me to Login.</a></p>
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
<script src="{!! asset('assets/scripts/pagejs/signup.js') !!}" type="text/javascript"></script>

@endpush