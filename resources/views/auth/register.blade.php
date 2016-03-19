@extends('layouts.app')

@section('content')
<div class="page-header m-t-1">
  <h1>{{ trans('auth.register') }}</h1>
</div>
<hr />

<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
  {!! csrf_field() !!}
  
  @if ($errors->has('name'))
  <div class="form-group row has-danger">
    <label for="name" class="col-sm-2 form-control-label">{{ trans('auth.name') }}</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-danger" id="name"
        name="name" value="{{ old('name') }}" placeholder="{{ trans('auth.name') }}">
      <span class="text-help">{{ $errors->first('name') }}</span>
    </div>
  </div>
  @else
  <div class="form-group row">
    <label for="name" class="col-sm-2 form-control-label">{{ trans('auth.name') }}</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name"
        value="{{ old('name') }}" placeholder="{{ trans('auth.name') }}">
    </div>
  </div>
  @endif
  
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
  
  @if ($errors->has('password_confirmation'))
  <div class="form-group row has-danger">
    <label for="password_confirmation" class="col-sm-2 form-control-label">{{ trans('auth.password_confirmation') }}</label>
    <div class="col-sm-10">
      <input type="password" class="form-control form-control-danger" id="password_confirmation"
        name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="{{ trans('auth.password_confirmation') }}">
      <span class="text-help">{{ $errors->first('password_confirmation') }}</span>
    </div>
  </div>
  @else
  <div class="form-group row">
    <label for="password_confirmation" class="col-sm-2 form-control-label">{{ trans('auth.password_confirmation') }}</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
        value="{{ old('password_confirmation') }}" placeholder="{{ trans('auth.password_confirmation') }}">
    </div>
  </div>
  @endif
  
  <div class="form-group row">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-secondary">{{ trans('auth.register') }}</button>
    </div>
    <a class="btn btn-link" href="{{ url('/login') }}">{{ trans('auth.login') }}</a>
  </div>
</form>
@endsection
