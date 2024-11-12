@extends('layouts.main')
@section('content')
    <div class="container mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Foto</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{ $id }}</th>
                    <td>{{ $produk['nama'] }}</td>
                    <td>{{ $produk['merk'] }}</td>
                    <td>{{ $produk['harga'] }}</td>
                    <td><img src="{{ $produk['foto'] }}" alt="" width="50" height="50"></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
