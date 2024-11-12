@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="card mt-4" style="width: 18rem;">
            <img src="produk.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Laptop</h5>
                <p class="card-text">Laptop powerful</p>
                <a href="{{ route("produk.detail_produk") }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
@endsection
