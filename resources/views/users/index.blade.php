@extends('layouts.app')
@section('content')
  USER INDEX PAGE
  @if (session('status'))
    <div class="alert alert-success">
      {{ session('status')}}
    </div>
  @endif
  @foreach ($users as $user)
    <li>{{ $user->name }}</li>
    <li>{{ $user->email }}</li>
    <li>{{ $user->avatar->avatar }}</li>
    <li><a href="{{ route('users.show', $user->id )}}">Dettagli</a></li>
    {{-- @dd($users->posts) --}}
  @endforeach
@endsection
