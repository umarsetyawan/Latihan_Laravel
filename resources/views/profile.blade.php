<!doctype html>
<html lang="en">
  <head>
   
  </head>
  <body>
<div class="container mt-4">
    @extends('layouts.main')
    @section('container')
    <h1>Halaman User</h1>

    @foreach($profile as $user)
      <h2>
        <a href ="/profile/{{ $user["link"]}}">{{$user["nama"]}}</a>
      </h2>
    @endforeach
    @endsection
</div>
  </body>
</html>