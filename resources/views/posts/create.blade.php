@extends('layouts.app')
@section('content')
  {{-- @dd($users) --}}
  <form action="{{route('posts.store')}}" method="post">
  @csrf
  @method('POST')
  {{-- aggiunta post per user --}}
  <select name="user_id">
    @foreach ($users as $user)
      <option value="{{ $user->id}}">{{ $user->id}}</option>
    @endforeach
  </select>
  <label for="title">Titolo</label>
  <input type="text" name="title" placeholder="title">
  <label for="content">Post</label>
  <textarea name="body" rows="8" cols="80"></textarea>
  <input type="submit" value="Invia">
  </form>
@endsection
