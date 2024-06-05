@extends('dashboard.layouts.main')
@section('content')
<div class="card-header">
    <h3 class="card-title">Title</h3>
</div>
  <div class="card-body">
    <div class="d-flex justify-content-center w-100 p-3 m-2 bg-light bg-opacity-25">
        <form class="d-flex" role="search" action="{{route('client.list')}}" method="get">
            @csrf
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search" style="width: calc(100% - 2.5rem);">
            <button class="btn btn-outline-warning ms-2" type="submit">Search</button>
        </form>
    </div>

    @if(Request::has('search'))
        <div class="row row-cols-6">
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
        <div class="row row-cols-6">
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
</div>
@endsection
