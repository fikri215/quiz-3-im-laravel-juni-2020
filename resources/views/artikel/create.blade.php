@extends('layouts.master')

@section('title')
Buat Artikel Menarik mu
@endsection

@section('content')

    <form action="/artikel" method="POST">
      @csrf
      <div class="form-group">
        <label for="isi">Judul</label>
        <input type="text" class="form-control mb-2" name="judul" id="judul" placeholder="Masukkan Judul Artikel">
        <label for="isi">Isi</label>
        <input type="text" class="form-control mb-2" height="40" name="isi" id="isi" placeholder="Masukkan isi Artikel">
        <label for="isi">Tag</label>
        <input type="text" class="form-control mb-2" name="tag" id="tag" placeholder="Masukkan tag Artikel">

      </div>
      <button type="submit" class="btn btn-primary">Publish</button>
      <a class="text-decoration-none ml-2 mt-2" href="/artikel">Kembali ke Daftar Artikel</a>
    </form>

@endsection