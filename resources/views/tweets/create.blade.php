@extends('layout')

@section('content')
<div class="contents row">
  <div class="container">
    {{ Form::open(['url' => '/tweets', 'method' => 'post']) }}
      <h3>投稿する</h3>
      <input type="text" placeholder="Nickname" name="name">
      <input type="text" placeholder="Image url" name="image">
      <textarea type="text"></textarea>
      <input type="submit" value="SENT">
    {{ Form::close() }}
  </div>
</div>
@endsection
