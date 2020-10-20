@extends('layouts.app')
@section('content')
  @if (session('insert'))
    <div class="alert alert-success">
      {{ session('insert')}}
    </div>
  @endif
  @foreach ($posts as $post)
    <div>
      <p>{{ $post->title }}</p>
      <p>{{ $post->body }}</p>
    </div>
  @endforeach
@endsection
