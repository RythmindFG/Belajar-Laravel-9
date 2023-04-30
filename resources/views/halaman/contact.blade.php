@extends('layouts/aplikasi')
    
    @section('konten')
        <h1>{{ $judul }}</h1>
        <p>Ini Halaman Contact</p>

        <ul>
            <li>Nomor HP : {{ $kontak['nomor_hp'] }}</li>
            <li>Email : {{ $kontak['email'] }}</li>
            <li>Facebook : {{ $kontak['facebook'] }}</li>
        </ul>
    @endsection
   