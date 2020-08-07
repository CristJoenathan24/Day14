@extends('Layouts.master')

@section('title','Detail Pertanyaan')

@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <h3>Detail Pertanyaan</h3>
                <ul>
                    <li>Judul Pertanyaan: {{$data->title}}</li>
                    <li>Pertanyaan: {{$data->question}}</li>
                    <li>Pertanyaan: {{$data->question}}</li>
                    <li>Nama Penanya: {{$data->full_name}}</li>
                    <li>Email Penanya: {{$data->email}}</li>
                    <li>Foto Penanya: {{$data->photo}}</li>
                </ul>
                <a href="{{url('/pertanyaan')}}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
