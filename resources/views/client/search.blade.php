@extends('client.layouts.main-2')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center p-3">{{$data->judul}}</h1>
            <hr>
            <div class="bg-dark bg-opacity-10">
                <p class="px-3">Genre : <strong>{{$data->genre->name}}</strong></p>
                <p class="px-3">Tahun Rilis : <strong>{{$data->tahun_rilis}}</strong></p>
            </div>
        </div>
        <img src="{{asset('img/card/'.$data->poster)}}" alt="poster" class="card-img-top" height="400">
        <p class="card-text px-3">Sinopsis : <br> {{$data->sinopsis}}</p>
    </div>
</div>
@endsection
