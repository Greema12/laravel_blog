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

// Route::get('/', function () {
//     return view('Layout/index');
// });
Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/home', 'purpleController@index')->name('home');


//event list
Route::get('/Event/eventlist' ,'purpleController@list');


Route::get('/User/user' ,'purpleController@userlist');

Route::get('/Event/liveevent' ,'purpleController@livelist');

Route::get('/Event/completed' ,'purpleController@completedlist');

//Route::get('/User/user/masterUpdate', 'purpleController@updateMaster');
 Route::get('/User/user/masterUpdate',array('as'=>'/User/user/masterUpdate',
    'uses'=>'purpleController@updateMaster'));

 Route::get('/Event/eventlist/finalUpdate',array('as'=>'/Event/eventlist/finalUpdate',
    'uses'=>'purpleController@update'));


//Route::get('/', 'purpleController@index');

Route::get('/User/user/finalUpdate/{id}', 'PurpleController@updateMasterUser');

//match status Update
// Route::get('/Events/updateMatchStatus',array('as'=>'/Events/updateMatchStatus',
   // 'uses'=>'purpleController@updateMatchStatus'));


//Add event name
Route::post('/Event/liveevent/addEventname', 'purpleController@addEventname');


//Edit user city
Route::post('/User/user/editUsercity', 'purpleController@editUsercity1');


//Delete city
Route::post('/User/user/deleteCity', 'purpleController@deleteCity');



//store event 
Route::get('/Event/store', 'purpleController@storeEvent');
//event list1
Route::get('/Event/add' ,'purpleController@list1');



//student image
Route::post('/Student/store','PurpleController@storepic');


Route::get('/Student/student' ,'purpleController@studentlist');
Route::get('/Student/studentview' ,'purpleController@studentlist12');

Route::get('/AAA/test' ,'purpleController@testing');