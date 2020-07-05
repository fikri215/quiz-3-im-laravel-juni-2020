@extends('layouts.master')

@section('title')
Edit Artikel
@endsection

@section('content')

    <form action="/artikel/{{ $artikel->id }}" method="POST">
      @csrf
      @method('PUT')

      <div class="form-group">
        <label for="isi">Judul</label>
        <input type="text" class="form-control mb-2" name="judul" id="judul" value="{{ $artikel->judul }}" placeholder="Masukkan Judul Artikel">
        <label for="isi">Isi</label>
        <input type="text" class="form-control mb-2" name="isi" id="isi" value="{{ $artikel->isi }}"placeholder="Masukkan isi Artikel">
        <label for="isi">Tag</label>
        <input type="text" class="form-control mb-2" name="tag" id="tag" value="{{ $artikel->tag }}"placeholder="Masukkan tag Artikel">

      </div>
      <button type="submit" class="btn btn-primary">Update</button>
      <a class="text-decoration-none ml-2 mt-2" href="/artikel">Kembali ke Daftar Artikel</a>
    </form>

@endsection