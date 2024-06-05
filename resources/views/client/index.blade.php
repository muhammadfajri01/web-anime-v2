@extends('client.layouts.main')

@section('content')
<div class="container px-0">
    <div class="row row-cols-3">
        @forelse ($data as $anime)
        <div class="col p-1">
            <div class="card">
                <img src="{{asset('img/card/'.$anime->poster)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{$anime->judul}}</h5>
                    <h6 class="card-text" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Genre : {{$anime->genre->name}}</h6>
                    <p class="card-text" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Sinopsis : <br>{{$anime->sinopsis}}</p>
                    <a href="{{route('client.detail', $anime->id)}}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
        @empty
            <p>table kosong</p>
        @endforelse
    </div>
    <div class="d-flex justify-content-center">
        {!! $data->appends(Request::all())->links('client.pagination') !!}
    </div>
</div>
@endsection

