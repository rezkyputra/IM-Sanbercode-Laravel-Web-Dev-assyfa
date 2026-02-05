@extends('layouts.master')
@section('title')
    Halaman Welcome
@endsection
@section('content')
    
<h1> Selamat Datang </h1>
<p>Nama : {{$fullname}}</p>
<p>Alamat : {{$alamat}}</p>
@endsection