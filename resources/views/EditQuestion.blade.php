@extends('Layouts.master')

@section('title','Buat Pertanyaan')

@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-Header">
                <h3 class="mt-3 ml-3">Edit Pertanyaan "{{$data->title}}"</h3>
            </div>
            <div class="card-body">
                <form role="form" method="POST" action="/pertanyaan/{{$data->question_id}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" id="title" name="title" placeholder="Masukan Title" value="{{ old('title',$data->title) }}">
                    </div>
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="pertanyaan">Pertanyaan</label>
                        <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" placeholder="Masukan pertanyaan Anda" value="{{ old('pertanyaan',$data->question) }}">
                    </div>
                    @error('pertanyaan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="{{url('/pertanyaan')}}" class="btn btn-primary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
