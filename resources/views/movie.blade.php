@extends('template.app')

@section('page_title', 'Movie')

@section('main')
    <div class="container mt-3">
        <div class="row g-3">
            @forelse ($movies as $movie)
                <div class="col-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="fs-3 fw-bold">{{ $movie->title }}</h2>
                        </div>
                    </div>
                </div>
            @empty
                Nessun Film Disponibile
            @endforelse
        </div>
    </div>
@endsection
