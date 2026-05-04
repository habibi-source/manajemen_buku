<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Manajemen Data Buku</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
   <div class="container">
    <h1>Manajemen Data Buku</h1>
    <div class="nav">
        <ul>
            <li><a href="{{ route('buku.index')}}">Buku</a></li>
            <li><a href="{{ route('kategori.index')}}">Kategori</a></li>
            <li><a href="{{ route('penerbit.index')}}">Penerbit</a></li>
        </ul>
    </div>