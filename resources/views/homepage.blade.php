@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="app.css">
<title>Utama</title>
    <div class="container">
        <style>
            #more {display: none; background-color: yellow}
        </style>
        <h1 class="text-center">SBKuis</h1><br>
        <center><img src="img/{{ $image }}" alt="sbkuislogo" width="200" class="img-thumbnail rounded-circle" ></center>
        <h1 class="text-center">Halaman Utama</h1>
        <p class="text-center"><strong>Website ini hanya menyediakan layanan Informasi & Permainan terkait Kuis Kebudayaan Indonesia</strong></p><br>
        <p class="text-center"><em>Untuk melihat referensi Pembelajaran bisa dilihat disini</em><a href="/vaksin"> Click</a></p>
        <p class="text-center"><em>Untuk informasi atau bantuan lebih lanjut bisa klik disini</em><a href="/contact"> Click</a></p>
    </div>
    

    
@endsection