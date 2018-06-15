<?php

use App\Task;
use Illuminate\Http\Request;

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

//----- Routes admin tâches ------\\
Route::group(['middleware' => 'auth'], function() {
    Route::get('/admin/tasks', ['middleware' => 'check-permission:admin', 'uses' => 'AdminTaskController@affichage']);
    Route::post('/admin/task', ['middleware' => 'check-permission:admin', 'uses' => 'AdminTaskController@store']);
    Route::delete('/admin/task/{task}', ['middleware' => 'check-permission:admin', 'uses' => 'AdminTaskController@destroy']);
});

//--------------------------------\\

//----- Routes user tâches ------\\
Route::get('/user/tasks', 'TaskController@index');
//--------------------------------\\

Route::get('/home', 'HomeController@index');


//----- Routes tickets  ------\\
Route::get('/tickets', 'TicketController@index');
Route::get('/commande', 'OrderController@index');

Route::get('/reclamation', function () {
  return view('tickets/reclamation');
});

Route::get('/remarque', function () {
  return view('tickets/remarque');
});
//--------------------------------\\



Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', function () {
    return view('welcome');
});

//-------------------------------//