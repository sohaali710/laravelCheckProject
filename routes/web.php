<?php

// use App\Http\Controllers\FirstController;
// use App\Http\Controllers\Front\UserController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

/**just an explaining */
// Route::get('/test1', function () {
//     return 'hello1';
// });

// /**route parameter */
// //required parameter
// Route::get('/test2/{id}', function () {
//     return 'hello2';
// });

// //optional parameter
// Route::get('/test3/{id?}', function () {
//     return 'hello3';
// });

// /**route name */
// Route::get('/show-number/test4/{id}', function ($id) {
//     return "$id";
// })->name('show.number');


/**namespace */

// Route::namespace('Front')->group(function () {
//     /**all routes here access a controller or methods in folder called Front  */
//     Route::get('user', [UserController::class, 'showUserName']);
// });

// Route::get('first', [FirstController::class, 'showString']);

/**prefix */
// Route::prefix('users')->group(function () {
//     //set of routes
// });

//or
Route::group(['prefix' => 'users'], function () {
    Route::get('/', function () {
        return "I'm here";
    });
});

/**middleware */
// Route::group(['prefix'=>'myHome','middleware'=>'middlewareName'],function(){

// });

// Route::get('check', function () {
//     return "It's a middleware";
// })->middleware('middlewareName');

/**end of explaining */
/**resource */
// Route::resource('news', 'NewsController');

// Route::get('news', 'NewsController@show');

////////////////////
/**return view
 * It's just an explaining.Views should be returned into a controller method
 */
// Route::get('/', function () {
//     return view('welcome')->with(['name' => 'soha', 'age' => '24']);
// });

Route::get('/', function () {
    $data = ['name' => 'soha', 'age' => '24'];
    return view('welcome', $data);
});

// Route::get('/landing', function () {
//     return view('landing');
// });


Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');