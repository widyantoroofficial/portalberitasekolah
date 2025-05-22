@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center">Berita Terbaruu</h2>
    <div class="row">
        @foreach($beritas as $berita)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('storage/' . $berita->image_path) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $berita->title }}</h5>
                    <p class="card-text">{{ \Str::limit($berita->description, 100) }}</p>
                    <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection