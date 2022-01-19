<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class HomeController extends Controller {
    public function testCollection()
    {
        $list_ring = ['Tiffany', 'Chanel', 'Dior', 'Bvlgari', 'Graff', 'Gucci', 'Ysl'];
        $list_ring = collect($list_ring);
        $list_produk = Produk::all();
// Sorting
        // Sort By Harga Terendah
        // dd($list_produk->sortBy('harga'));

        // Sort By Harga Tertinggi
        // // dd($list_produk->sortByDesc('harga'));


        // // Map
        // $map = $list_produk->map(function($item){
        //     echo "$item->nama <br>";
        // });

        // // Filter
        // $filtered = $list_produk->filter(function($item){
        //     return $item->harga < 50000;
        // });

        // dd($filtered);

        // // Sum, Max, Min, Avg
        // $sum = $list_produk->avg('harga');
        // dd($sum);

        $data['list'] = Produk::Paginate(6);
        return view ('test-collection', $data);


        dd($list_ring, $list_produk);
    }
}