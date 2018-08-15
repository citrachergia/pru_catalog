<?php

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

// ===========================//
//         Main page          //
// ===========================//
Route::get('/', function () {
    return view('welcome');
});


// ===========================//
//        detail page         //
// ===========================//

Route::get('/pendidikan', function () {
    return view('/detail/pendidikan');
});

Route::get('/kesehatan', function () {
    return view('/detail/kesehatan');
});

Route::get('/kondisi-kritis', function () {
    return view('/detail/kritis');
});

Route::get('/proteksi', function () {
    return view('/detail/proteksi');
});

Route::get('/investasi', function () {
    return view('/detail/investasi');
});


// ===========================//
//          menu page         //
// ===========================//

Route::get('/solusi', function () {
    return view('/menu/solusi');
});
Route::get('/profil', function () {
    return view('/menu/profil');
});


// ===========================//
//      viewdetail page       //
// ===========================//

Route::get('/solusi/viewdetail', function () {
    return view('/viewdetail/viewdetail');
});
// Route::get('/solusi/{nama_produk}', 'DetailController@viewdetail');


