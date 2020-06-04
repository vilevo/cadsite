<?php

use App\Http\Controllers\VisiteurController;
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
    return view('index');
})->name('acceuil');
Route::get('a-propos', function () {
    return view('apropos');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('acheter-des-actions/projets', function () {
    $projets = App\Projet::all();
    return view('projets')->with('projets', $projets);
})->name('investir.projets');
Route::get('details-du-projet/{id}', 'VisiteursController@show_projet')->where('id', '[0-9]+')->name('projet.show');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function () {
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
    Route::resource('/projets', 'ProjetController');
});
