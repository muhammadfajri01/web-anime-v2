@extends('client.layouts.main-2')

@section('content')
<div class="container px-0">
    <form class="d-flex p-3 m-2 bg-light bg-opacity-25" role="search" action="{{route('client.list')}}" method="get">
        @csrf
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
        <button class="btn btn-outline-warning" type="submit">Search</button>
    </form>
    @if(Request::has('search'))
        <div class="row row-cols-3">
            @forelse ($results as $anime)
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
                <p>Search result is empty</p>
            @endforelse
        </div>
    @else
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
    @endif
    <div class="d-flex justify-content-center">
        {!! $data->appends(Request::all())->links('client.pagination') !!}
    </div>
</div>
@endsection


