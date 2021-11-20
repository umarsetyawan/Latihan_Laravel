@extends('layouts.main')

@section('container')
    <h2>
        Nama : {{$post["nama"]}}
    </h2>
    <p>
        Alamat : {{$post["alamat"]}}
    </p>
    <p>
       Tanggal Lahir : {{$post["tanggal_lahir"]}}
    </p>

<a href="/profile">Back to Profile</a>
@endsection