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
    $data = [
        'comics' => config('comics')
        ];

    return view('welcome', $data);
})->name('homepage');

Route::get('/comic/{id}', function ($id) {
    $comics = config('comics');

    if(array_key_exists($id, $comics)) {
        $fumetto = $comics[$id];
        $data = [
            'comic' => $fumetto
            ];
        return view('single', $data);
    }
    
    abort(404);

})->name('comic-page');
