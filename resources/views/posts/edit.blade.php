@extends('layouts.app')

@section('content')
<div class="page-header m-t-1">
  <h1>{{ $post->title }}</h1>
</div>
<hr />

<div class="container">
  <form class="form-horizontal" role="form" method="POST" action="{{ url('/edit/' . $post->slug) }}">
  {!! csrf_field() !!}
  
    <div class="row">
      <div class="col-md-6">
        <fieldset class="form-group">
          <label for="content">Post Content</label>
          <textarea class="form-control" id="content" name="content" rows="30">{{ old('content', $post->edit->content) }}</textarea>
        </fieldset>
      </div>
      <div class="col-md-6">
        <label>Live Preview</label>
        <button type="submit" class="btn btn-secondary">Save</button>
        <div id="mdPreview"></div>
      </div>
    </div>
  </form>
</div>

@endsection

@push('scripts')
<script>
$("#mdPreview").html(markdown.markdown.toHTML($('#content').val()));

$("#content").on('input', function(e) {
  $("#mdPreview").html(markdown.markdown.toHTML($('#content').val()));
});
</script>
@endpush

