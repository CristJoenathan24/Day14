@extends('Layouts.master')

@section('title','Welcome')

@section('content')
    <div class="container mt-3">
        <h1>Welcome To Our Blog</h1><br><br>
        <h6>panduan penggunaan:</h6>
        <ul>
            <li>untuk kembali ke halaman ini klik tombol 'home' pada navbar paling kiri</li>
            <li>untuk melihat dan mengelola list pertanyaan klik tombol 'List Pertanyaan' pada navbar</li>
            <li>untuk membuat pertanyaan baru klik tombol 'Buat Pertanyaan' pada navbar</li>
        </ul>
        <br><br>
        <h6><b>NOTE:</b></h6>
        <h6><b>DIKARENAKAN KETERGANTUNGAN TABLE QUESTIONS DENGAN PROFILE</b></h6>
        <h6><b>SEBELUM MEMULAI PROGRAM GUNAKAN </b><i>php artisan migrate:fresh --seed </i></h6>
        <h6><b>BERGUNA UNTUK MEMBERIKAN 1 BUAH DATA PADA PROFILE DENGAN ID = 1</b></h6>
    </div>
@endsection
