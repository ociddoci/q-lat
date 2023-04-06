@extends('layouts.main')
@section('container')
    <h1>Halaman About</h1>
    {{-- php echo versi blade adalah {{}} --}}
    <h3>{{ $nama }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $image }}" width="200" class="img-thumbnail rounded-circle"></img>
@endsection
