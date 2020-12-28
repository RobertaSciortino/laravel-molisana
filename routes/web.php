<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::get('/prodotti', function () {
  $pasta_shapes = config('pasta-shapes');
  $data = [
    "pasta_shapes" => $pasta_shapes
  ];
  return view('prodotti', $data);
})->name('products');

Route::get('/dettagli-prodotto/{id}', function ($id) {
  $pasta_shapes = config('pasta-shapes');
  //verifico se $id e' un numero e se e' compreso tra 0 e il numero di elementi dell'array $pasta_shapes
  if(is_numeric($id) && $id >= 0 && $id < count($pasta_shapes)) {
    $product = $pasta_shapes[$id];
    $data = [
      "shape" => $product
    ];
    return view('dettagli', $data);
  } else {
    abort('404');
  }

})->name('product_details');

Route::get('/news', function () {
    return view('news');
})->name('news');
