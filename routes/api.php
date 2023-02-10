<?php

use App\Http\Controllers\apiControler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->group(function () {


    Route::get('news',[apiControler::class,'news']);
    Route::get('prodects',[apiControler::class,'prodects']);
  


    Route::post('login',[apiControler::class,'login']);
    Route::post('regester',[apiControler::class,'regester']);
    Route::post('edit_profile',[apiControler::class,'edit_profile']);
    Route::post('editpassword',[apiControler::class,'editpassword']);


    Route::get('allinshop',[apiControler::class,'allinshop']);//////pasceket
    Route::get('historyprodect',[apiControler::class,'historyprodect']); /////history
    Route::post('storeinpascket',[apiControler::class,'storeinpascket']);
    Route::post('deletall_itarm',[apiControler::class,'deletall_itarm']);
    Route::post('deletone',[apiControler::class,'deletone']);




    



    Route::prefix('user')->group(function () {

        
            // Route::post('register','User\RegisterController@register');
            // Route::post('verify','User\VerifyController@verify');
            // Route::post('resend_verification_code','User\VerifyController@resend');
            // Route::post('login','User\LoginController@login');
    
            // Route::prefix('password')->group(function () {
            // Route::post('forget','User\ResetPasswordController@sendCode');
            // Route::post('check','User\ResetPasswordController@check');
            // Route::post('reset','User\ResetPasswordController@resetPassword');
        });
    
    });






