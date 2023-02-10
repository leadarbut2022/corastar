<?php

use App\Http\Controllers\Addcard;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FaceBookController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\NEWSController;
use App\Http\Controllers\NewsposterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdectController;
use App\Http\Controllers\RegesterController;
use App\Http\Controllers\SelerController;
use App\Http\Controllers\Viwes;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

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

    Route::get('/', [AdminController::class, 'neshed'])->name('/'); 
     Route::get('/tabls', function () { return view('home/table');})->name('tabls');
     Route::get('/gols', function () { return view('home/gols');})->name('gols');
     Route::get('/shop', [ProdectController::class,'index'])->name('shop');







/****** **** all imp **********************************************************/
                                                                            /**/ 
Route::resource('prodects',ProdectController::class);                       /**/ 
Route::post('search', [ProdectController::class, 'search'])->name('search');                                                                     /**/ 
                                                                            /**/ 
/****** **** all imp **********************************************************/







/**   valdate clint ////////////////////////////////////////////////////////////////////////////////*/
// Route::get('registration', [RegesterController::class, 'registration'])->name('register-user');


Route::get('pri', function(){ return view('/clint/privse');})->name('pri');
Route::get('registration', function () { return view('Auth/register');})->name('registration');
Route::post('custom-login', [RegesterController::class, 'customLogin'])->name('login.custom'); 
Route::post('custom-registration', [RegesterController::class, 'store'])->name('register.custom'); 
Route::get('signout', [RegesterController::class, 'signOut'])->name('signout');


Route::group(['middleware' =>['AuthClintUser'] ],function (){

    Route::get('profile', [RegesterController::class, 'profile'])->name('profile'); 
    Route::get('login', [RegesterController::class, 'index'])->name('login');
    Route::get('all_orders_clint_have', [Addcard::class, 'all_orders_clint_have'])->name('all_orders_clint_have'); 
    
    Route::get('edit_profile_page', [RegesterController::class, 'edit_profile_page'])->name('edit_profile_page'); 
    
    Route::post('edit_profile', [RegesterController::class, 'edit_profile'])->name('edit_profile'); 


    Route::post('addCard', [Addcard::class, 'store'])->name('addCard'); 
    Route::post('show_num_card', [Addcard::class, 'show_num_card'])->name('show_num_card'); 
    Route::post('select_all', [Addcard::class, 'show_card'])->name('select_all');
  
  
 


    Route::post('delet_profrom_card', [Addcard::class, 'delet'])->name('delet_profrom_card'); 
    Route::post('check_out_ofline', [Addcard::class, 'check_out_ofline'])->name('check_out_ofline'); 
    Route::post('deletall_itarm', [Addcard::class, 'deletall_itarm'])->name('deletall_itarm'); 
});
/**   valdate clint //////////////////////////////////////////////////////////////////////////////////*/




/** *********seler **************************************************************************************/

Route::post('loginSeler', [SelerController::class, 'customLogin'])->name('loginSeler'); 
Route::get('signoutSeler', [SelerController::class, 'signOut'])->name('signoutSeler');





Route::post('registrationSeler', [SelerController::class, 'store'])->name('registrationSeler'); 

Route::group(['middleware' =>['AuthselerUser'] ],function (){
    Route::get('create_prodects', [SelerController::class, 'create_prodects'])->name('create_prodects');
    Route::get('profile_seler', [SelerController::class, 'profile'])->name('profile_seler'); 
    Route::get('all_u_post', [SelerController::class, 'show_all_prodects_seler_post'])->name('all_u_post');
    Route::get('orders_from_clint', [SelerController::class, 'orders_from_clint'])->name('orders_from_clint');
 
    Route::post('delet_u_prodect', [SelerController::class, 'delet_u_prodect'])->name('delet_u_prodect'); 
    Route::post('edit_u_prodect', [SelerController::class, 'edit_u_prodect'])->name('edit_u_prodect'); 
    Route::post('update_pro', [SelerController::class, 'update_pro'])->name('update_pro'); 
    Route::post('allw_order', [SelerController::class, 'allw_order'])->name('allw_order'); 

    
    
    
});

/********* seler ****************************************************************************************/




/**  poster ********************************************************************************************************/
Route::get('loginposterPage', [NewsposterController::class, 'loginposterPage'])->name('loginposterPage');
Route::post('loginPoster', [NewsposterController::class, 'customLogin'])->name('loginPoster'); 
Route::post('registrationPoster', [NewsposterController::class, 'store'])->name('registrationPoster');
Route::post('registrationPoster', [NewsposterController::class, 'store'])->name('registrationPoster'); 
Route::post('registrationPoster_preson', [NewsposterController::class, 'registrationPoster_preson'])->name('registrationPoster_preson'); 
Route::get('signoutPoster', [NewsposterController::class, 'signOut'])->name('signoutPoster');


Route::group(['middleware' =>['AuthPosterNews'] ],function (){
   
    Route::get('allpost', [NewsposterController::class, 'allpost'])->name('allpost');
    Route::get('createPost', [NewsposterController::class, 'createPost'])->name('createPost');
Route::post('delet_fromPoster', [NewsposterController::class, 'delet_fromPoster'])->name('delet_fromPoster'); 
    
});
/**  poster ***********************************************************************************************************/







/**  news  *********************************************************************/

Route::get('/news', [NEWSController::class, 'index'])->name('/news');
Route::post('Newscreate', [NEWSController::class, 'store'])->name('Newscreate'); 


/**  news  **********************************************************************/




/*********************************************  vews all **************************************/


Route::post('view_prodect',[Viwes::class,'prodect'])->name('view_prodect');
Route::get('view_table',[Viwes::class,'table'])->name('view_table');
Route::get('views_post',[Viwes::class,'post'])->name('views_post');

/*********************************************  vews all **************************************/



/******************************************************************************************
 *       Card  shopping                                                                   /*
 */                                                                                       /*
/****************************************************************************************** */





/****************************************************************************************** */




/*********************** admin  ******************************************************************* */
Route::post('loginAdmin',[AdminController::class,'loginAdmin'])->name('loginAdmin');
Route::get('logoutadmin',[AdminController::class,'logoutadmin'])->name('logoutadmin');
Route::get('loginAdminPage',[AdminController::class,'loginAdminPage'])->name('loginAdminPage');





Route::group(['middleware' =>['admin'] ],function (){

Route::post('storevaldate', [SelerController::class, 'storevaldate'])->name('storevaldate'); 
Route::post('addAdmin', [AdminController::class, 'addAdmin'])->name('addAdmin'); 



    Route::get('dachbord',[AdminController::class,'dachbord'])->name('dachbord');
    Route::get('addseler',[AdminController::class,'addseler'])->name('addseler');
    Route::get('addposter',[AdminController::class,'addposter'])->name('addposter');
    Route::get('addadminpage',[AdminController::class,'addadminpage'])->name('addadminpage');
    Route::get('assestpage', function(){ return view('admin/assest');})->name('assestpage');
    Route::post('assest',[AdminController::class,'assest'])->name('assest');
Route::post('chat',[AdminController::class,'chat'])->name('chat');
Route::post('delet_fromadmin',[AdminController::class,'delet_fromadmin'])->name('delet_fromadmin');
    
});


/**************************admin  ***************************************************************** */




/// web v     




Route::get('/cora_web_v', function () { return view('home/cora_web_v');})->name('cora_web_v');



/*********************************** reseet  passssword */ 


  
// Route::get('shoe_pass_page_reset', [ForgotPasswordController::class, 'shoe_pass_page_reset'])->name('shoe_pass_page_reset');
// Route::post('send_sms_link', [ForgotPasswordController::class, 'send_sms_link'])->name('send_sms_link');

// Route::get('form_isert_new_pass/{token?}', [ForgotPasswordController::class, 'form_isert_new_pass'])->name('form_isert_new_pass');
// Route::post('inser_nwe_pass', [ForgotPasswordController::class, 'inser_nwe_pass'])->name('inser_nwe_pass');



// Route::get('email_tmp_page', function(){ return view('Auth/resetpass/emailtemp');})->name('email_tmp_page');



/*********************************** reseet  passssword */ 


 Route::get('log_face', [FaceBookController::class, 'loginUsingFacebook'])->name('shoe_pass_page_reset');

//  Route::get('auth/facebook', [FacebookSocialiteController::class, 'loginUsingFacebook']);
 Route::get('callback/facebook', [FacebookSocialiteController::class, 'callbackFromFacebook'])->name('callback/facebook');
 

