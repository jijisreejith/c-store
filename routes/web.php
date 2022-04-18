<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\adminController;
use App\http\controllers\userController;


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

Route::get('/',[adminController::class,'index']);
Route::get('/viewfeedback',[adminController::class,'viewfeedback']);
Route::get('/addproducts',[adminController::class,'addproduct']);
Route::post('/addproductsindex',[adminController::class,'addproductaction']);
Route::get('/viewusers',[adminController::class,'viewusers']);
Route::get('/viewproducts',[adminController::class,'viewproducts']);
Route::get('/addgallery',[adminController::class,'addgallery']);
Route::post('/addgalleryindex',[adminController::class,'addgalleryaction']);
Route::get('/editgallery/{id}',[adminController::class,'editgallery']);
Route::get('/viewgallery',[adminController::class,'viewgallery']);
Route::get('/edit/{id}',[adminController::class,'edit']);
Route::post('/updategallery/{id}',[adminController::class,'updatedata']);
Route::post('/updatedata/{id}',[adminController::class,'update']);
Route::get('/delete/{id}',[adminController::class,'delete']);
Route::get('/logout',[adminController::class,'logout']);






Route::get('/index',[userController::class,'index']);
Route::get('/medicines',[userController::class,'medicines']);
Route::get('/userregister',[userController::class,'userregister']);
Route::post('/userregindex',[userController::class,'userregaction']);
Route::get('/userlogin',[userController::class,'userlogin']);
Route::post('/loginaction',[userController::class,'userloginaction']);
Route::get('/about',[userController::class,'about']);
Route::get('/usercontact',[userController::class,'usercontact']);
Route::post('/usercontactindex',[userController::class,'usercontactaction']);
// Route::get('/viewfeedback',[userController::class,'viewfeedback']);
// Route::get('/addproducts',[userController::class,'addproducts']);
// Route::post('/addproductsindex',[userController::class,'addproductaction']);
Route::get('/home',[userController::class,'home']);
Route::get('/editprofile',[userController::class,'editprofile']);
Route::post('/updateprofile/{id}',[userController::class,'update']);
Route::get('/addcart/{id}',[userController::class,'addcart']);
Route::get('/viewcart',[userController::class,'viewcart']);
Route::get('/deletedata/{id}',[userController::class,'deletedata']);

Route::get('/totalprize/{id}',[userController::class,'total']);
Route::get('/buyproduct/{id}',[userController::class,'buyproduct']);
Route::get('/total/{id}',[userController::class,'totalprice']);
Route::get('/payments',[userController::class,'payments']);
Route::post('/paymentindex',[userController::class,'paymentAction']);










