<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;

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

//yo project chai euta form banauna gariyeko project ho, yo project ko lagi basic needs haru euta model Post with migration ho ani hamile posts migration ma chai user_id, title ani content add gareko xau ani esko relations chai one to many ho so Post model vitra hamile relations define gareko xam (hasMany). Ani eslai chaine arko kura vaneko controller ho, hamile yeha euta controller create gareau with resources ani arko kura chai hamile view pani add gareko xam, views vitra ko posts vanne file create gareko xam ani tesma hamiile add gareko xam, create, edit, show, index blade.php for this crud application, ani tala hamile route add gareau resource sanga

//crud application

// Route::resource('/posts', PostsController::class);

// Route::resource('/instas', UsersController::class);

//validate garnu lai talako route chainxa

Route::group(['middleware' => 'web'], function () {
    Route::resource('/posts', PostsController::class);
});
