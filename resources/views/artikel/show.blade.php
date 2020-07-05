@extends('layouts.master')

@section('title')
Detail Artikel
@endsection

@section('content')

    <h1>Detail Artikel</h1>
            
            <div class="card mt-1">
                <div class="card-body">
                    <h4 class="card-title text-bold">Judul: {{ $artikel->judul }}</h4>
                    <h6 class="card-subtitle text-bold"> slug: {{ $artikel->slug }}</h6>
                    <p class="card-text mt-2">{{ $artikel->isi }}</p>
                    <div class="tag mb-2">
                        Tags: <a href="#" class="btn btn-success">{{ $artikel->tag }}</a>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <a class="text-decoration-none ml-2 mt-2" href="/artikel">Kembali ke daftar artikel</a>
            </div>

@endsection
