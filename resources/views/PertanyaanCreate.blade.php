@extends('Layouts.master')

@section('title','Buat Pertanyaan')

@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <h3>Buat Pertanyaan</h3>
            </div>
            <div class="card-body">
                <form role="form" method="POST" action="/pertanyaan">
                    @csrf
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" id="title" name="title" placeholder="Masukan Title" value="{{ old('title','') }}">
                    </div>
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="pertanyaan">Pertanyaan</label>
                        <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" placeholder="Masukan pertanyaan Anda" value="{{ old('pertanyaan','') }}">
                    </div>
                    @error('pertanyaan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="profileId">Profile Id</label>
                        <input type="text" class="form-control" id="profileId" name="profileId" placeholder="Masukan Profile ID Anda" value="{{ old('profileId','') }}">
                    </div>
                    @error('profileId')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
