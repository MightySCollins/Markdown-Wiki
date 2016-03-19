@extends('layouts.app')

@section('content')
<div class="page-header m-t-1">
  <h1>{{ trans('auth.login') }}</h1>
</div>
<hr />

<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
  {!! csrf_field() !!}
  
  @if ($errors->has('email'))
  <div class="form-group row has-danger">
    <label for="email" class="col-sm-2 form-control-label">{{ trans('auth.email') }}</label>
    <div class="col-sm-10">
      <input type="email" class="form-control form-control-danger" id="email"
        name="email" value="{{ old('email') }}" placeholder="{{ trans('auth.email') }}">
      <span class="text-help">{{ $errors->first('email') }}</span>
    </div>
  </div>
  @else
  <div class="form-group row">
    <label for="email" class="col-sm-2 form-control-label">{{ trans('auth.email') }}</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email"
        value="{{ old('email') }}" placeholder="{{ trans('auth.email') }}">
    </div>
  </div>
  @endif
  
  @if ($errors->has('password'))
  <div class="form-group row has-danger">
    <label for="password" class="col-sm-2 form-control-label">{{ trans('auth.password') }}</label>
    <div class="col-sm-10">
      <input type="password" class="form-control form-control-danger" id="password"
        name="password" value="{{ old('password') }}" placeholder="{{ trans('auth.password') }}">
      <span class="text-help">{{ $errors->first('password') }}</span>
    </div>
  </div>
  @else
  <div class="form-group row">
    <label for="password" class="col-sm-2 form-control-label">{{ trans('auth.password') }}</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password"
        value="{{ old('password') }}" placeholder="{{ trans('auth.password') }}">
    </div>
  </div>
  @endif
  
  <div class="form-group row">
    <div class="col-sm-10 col-md-offset-2">
      <div class="checkbox">
        <label>
          <input type="checkbox"  name="remember"> {{ trans('auth.remember') }}
        </label>
      </div>
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-secondary">Sign in</button>
    </div>
    <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
  </div>
</form>
@endsection
