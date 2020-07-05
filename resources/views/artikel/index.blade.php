@extends('layouts.master')

@section('title')
Tempatnya Berbagi Artikel Menarik
@endsection

@section('content')

    <h1>Daftar Artikel</h1>
            <a class="btn btn-primary mb-2" href="/artikel/create">
            Buat Artikelmu!</a>

            @foreach($artikels as $artikel)
            <div class="card mt-1">
                <div class="card-body">
                    <h4 class="card-title text-bold"><a class="text-decoration-none" href="/artikel/{{ $artikel->id }}"> {{ $artikel->judul }} </a></h4>
                        <a href="/artikel/{{ $artikel->id }}" class="btn btn-info">Show</a>
                        <a href="/artikel/{{ $artikel->id }}/edit" class="btn btn-warning">Edit</a>
                        <form action="/artikel/{{ $artikel->id }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                           <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus artikel ini?')"><i class="fas fa-trash"></i></button>
                        </form>
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>
            @endforeach

@endsection

@push('scripts')

    <script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
    </script>

@endpush