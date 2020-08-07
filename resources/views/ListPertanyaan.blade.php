@extends('Layouts.master')

@section('title','List Pertanyaan')

@section('content')
    <div class="container mt-3">
        <div class="card">
           <div class="card-header">
               <h3 class="mb-3">List Pertanyaan</h3>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table table-hover table-responsive-md">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">title</th>
                        <th scope="col">question</th>
                        <th scope="col">Profile Name</th>
                        <th scope="col">action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($datas as $key => $data)
                            <tr>
                                <th scope="row"> {{ $key+1 }} </th>
                                <td> {{ $data->title }} </td>
                                <td>
                                    <marquee>
                                        {{ $data->question }}
                                    </marquee>
                                </td>
                                <td> {{ $data->full_name }} </td>
                                <td>
                                    <div style="display: flex">
                                        <a href="/pertanyaan/{{ $data->question_id }}" class="btn btn-primary">Detail</a>
                                        <a href="/pertanyaan/{{ $data->question_id }}/edit" class="btn btn-success ml-2">Edit</a>
                                        <form action="/pertanyaan/{{ $data->question_id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Delete" class="btn btn-danger ml-2">
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <h1>No question on database</h1>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
