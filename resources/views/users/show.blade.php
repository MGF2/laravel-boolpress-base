@extends('layouts.app')
@section('content')
  USER INDEX PAGE
    <li>{{ $user->name }}</li>
    <li>{{ $user->email }}</li>
    <li>{{ $user->avatar->avatar }}</li>
    <li>{{ $user->avatar->telefono }}</li>
    <form action="{{ route('users.destroy', $user->id)}}" method="post">
      @csrf
      @method('DELETE')
      <input type="submit" name="" value="Cancella Utente">
    </form>
    <h3>post che ha scritto:</h3>
    @foreach ($user->posts as $post)
      <div>
        <p>{{ $post->title }}</p>
        <p>{{ $post->body }}</p>
      </div>

    @endforeach
@endsection
