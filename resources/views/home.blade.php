@extends('layouts.main')
@section('content')
    <div class="container my-5">
        <div class="position-relative p-5 text-center text-muted bg-body border border-dashed rounded-5">
            <button type="button"
                class="position-absolute top-0 end-0 p-3 m-3 btn-close bg-secondary bg-opacity-10 rounded-pill"
                aria-label="Close"></button>
            <img src="/produk.jpg"
                alt=""
                width="100" height="100" class="img-fluid">
            <h1 class="text-body-emphasis">Produk</h1>
            <p class="col-lg-6 mx-auto mb-4">
                Laptop Terbaru
            </p>
            
            <a href="{{ route('produk.index') }}">
                <button class="btn btn-primary px-5 mb-5" type="button">
                    Lihat Produk 
                </button>
            </a>
        </div>
    </div>
@endsection
