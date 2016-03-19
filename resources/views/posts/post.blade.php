@extends('layouts.app')

@section('content')
<div class="page-header m-t-1">
  <h1>{{ $post->title }}</h1>
</div>
<hr />
Last <a href="{{ url('archive/edit/'.$post->edit->id) }}">edit</a> by
<a href="{{ url('user/'.$post->edit->user_id) }}">{{ $post->edit->user->name }}</a>

{!! $post->markdown !!}
@endsection
