@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($datas as $data)
            <div class="col">
                <div class="card mt-4">
                    <img src="produk.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $data['nama'] }}</h5>
                        <p class="card-text">{{ $data['merk'] }}</p>
                        <a href="{{ route('produk.detail_produk', $data['id']) }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
