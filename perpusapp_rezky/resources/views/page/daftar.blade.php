@extends('layouts.master')
@section('title')
    Halaman Daftar
@endsection
@section('content')
    
<a href="/">kembali</a>
<form method="POST" action="/home">
     @csrf
    <label >Fullname</label> <br>
    <input type="text" name="fullname" > <br> <br>
    <label >Alamat</label> <br>
    <textarea name="address" cols="30" rows="10"></textarea> <br> <br>

    <input type="submit" value="kirim">

</form>
@endsection
    