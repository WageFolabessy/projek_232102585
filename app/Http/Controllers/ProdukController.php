<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $datas = [
            [
                'id' => 1,
                'nama' => 'Laptop ROG GAMERS',
                'merk' => 'Asus'
            ],
            [
                'id' => 2,
                'nama' => 'Laptop Vivobook',
                'merk' => 'Asus'
            ],
            [
                'id' => 3,
                'nama' => 'Laptop Nitro',
                'merk' => 'Acer'
            ],
        ];
        return view("produk", compact('datas'));
    }
    

    public function detail_produk($id){
        // Simulasi data produk berdasarkan ID
        $produkDetails = [
            1 => [
                'nama' => 'ROG GAMERS',
                'merk' => 'Asus',
                'harga' => 'Rp. 12.000.000',
                'foto' => '/produk.jpg',
            ],
            2 => [
                'nama' => 'Vivobook',
                'merk' => 'Asus',
                'harga' => 'Rp. 8.000.000',
                'foto' => '/produk.jpg',
            ],
            3 => [
                'nama' => 'Nitro',
                'merk' => 'Acer',
                'harga' => 'Rp. 10.000.000',
                'foto' => '/produk.jpg',
            ],
        ];
    
        $produk = $produkDetails[$id] ?? null;
    
        return view("detail_produk", compact('produk', 'id'));
    }
    
    
}
