@extends('frontend.layout.master')

<!-- Dynamic Tiltile  -->
@section('title', 'Update Profile')

<!-- Page Content -->
@section('content')

<div class="header-base mt30">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="text-left">
          <h1>Update Profile</h1>
        </div>
      </div>
      <div class="col-md-3">
        <ol class="breadcrumb b white">
          <li><a href="lawyer-dashboard.html">Dashboard</a></li>
          <li class="active">Update Profile</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="section-empty inner_page">
  <div class="container content">
    <div class="col-md-6 col-md-offset-3">
      <div class="row">
        <div class="col-md-12"> 
          <!-- Lawyer Box Open -->
          <div class="shadow_box">
            <form method="POST" id="form" class="form" action="#" >
               {{ csrf_field() }} 
               <div class="form-group">
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Full Name" value="{{old('name', $user->name)}}">
                @if($errors->has('name'))
                    <div class="error">{{ $errors->first('name') }}</div>
                @endif
              </div>

              <div class="form-group">
                <input type="text" name="email" id="email" class="form-control" placeholder="Enter e-mail address" value="{{old('email', $user->email )}}">
                @if($errors->has('email'))
                    <div class="error">{{ $errors->first('email') }}</div>
                @endif
              </div>
              <div class="form-group">
                <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter your mobile number" value="{{old('mobile', $user->mobile)}}">
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
                <button type="submit" name="submit" id="submit" class="btn btn-block btn-lg btn-danger">Submit</button>
              </div>
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