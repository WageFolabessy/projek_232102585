<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        return view("produk");
    }

    public function detail_produk(){
        return view("detail_produk");
    } 
}
