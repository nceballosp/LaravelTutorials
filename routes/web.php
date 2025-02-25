<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");

Route::get('/about', function () {
    $data1 = "About us - Online Store";
    $data2 = "About us";
    $description = "This is an about page ...";
    $author = "Developed by: Natalia Ceballos";
    return view('home.about')->with("title", $data1)
      ->with("subtitle", $data2)
      ->with("description", $description)
      ->with("author", $author);
})->name("home.about");

Route::get('/contact', function () {
    $data1 = "Contact us - Online Store";
    $data2 = "Contact us";
    $email = "email@gmail.com";
    $address = "Street 123 - City";
    $phone = "123456789";
    return view('home.contact')->with("title", $data1)
      ->with("subtitle", $data2)
      ->with("email", $email)
      ->with("address", $address)
      ->with("phone", $phone);
})->name("home.contact");

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name("product.create");
Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name("product.save");
Route::get('/products/validate', 'App\Http\Controllers\ProductController@validate')->name("product.validation");
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");

