<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $products = [
        'Notebook', 'Geladeira', 'Televisão', 'Boneca', 'Violão', 'Livro', 'Radio', 'Smartphone',
        'Fone', 'Carro', 'Moto', 'Casa', 'Pendrive', 'Mouse', 'Fogão', 'Cama', 'Tapete'
    ];

    for($i = 0; $i <= count($products) -1 ; $i++) {
        Product::create([
            'name' => $products[$i],
            'description' => $products[$i]." Lorem ipsum",
            'price' => rand(100, 99999),
            'qtd_available' => rand(1, 9),
            'qtd_total' => rand(10, 30)
        ]);
    }
    
    return Product::all();
});
