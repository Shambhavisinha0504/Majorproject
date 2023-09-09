<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgriController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Consult\ConsultController;
use App\Http\Controllers\Consult\consultant;
use App\Http\Controllers\SchemeController;
use App\Http\Controllers\RazorPayPaymentController;
use App\Http\controllers\ProductController;
use App\Http\Controllers\Admin\Admincontrol;

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

Route::get('/',[AgriController::class,'index']);
Route::get('login',[AgriController::class,'login'])->name('login'); 
Route::post('login-post',[AgriController::class,'postlogin'])->name('login.post');
Route::get('myprofile',[AgriController::class,'myprofile'])->middleware(['auth','is_active_check']);
Route::get('register',[AgriController::class,'register']);
Route::post('save-user',[AgriController::class,'saveUser']);
Route::get('verify-account/{token}',[AgriController::class,'AccountVerify'])->name('user.verify');
Route::get('refresh-captcha',[AgriController::class,'refreshCaptcha'])->name('refresh.verify');

Route::post('update-password', [AgriController::class, 'updatePassword'])->name('update-password');
Route::get('reset-password/{token}', [AgriController::class, 'resetPassword'])->name('reset-password');
Route::post('reset-password', [AgriController::class, 'resetPasswordSubmit'])->name('reset-password');

Route::get('forgot-password', [AgriController::class, 'forgotPassword'])->name('forgot-password');
Route::post('forgot-password', [AgriController::class, 'forgotPasswordSubmit'])->name('forgot-password');


Route::post('get-states',[AgriController::class,'getState']);
Route::post('get-cities',[AgriController::class,'getCity']);

Route::get('edit-profile',[AgriController::class,'editProfile'])->name('edit-profile');
Route::get('update-user',[AgriController::class,'updateUser'])->name('update-user');
Route::get('change-password',[AgriController::class,'changepassword'])->name('change-password');

//Route::get('scheme',[AgriController::class,'scheme']);
Route::get('logout',[AgriController::class,'logout']);
Route::get('contact',[AgriController::class,'Contact']);
Route::get('about',[AgriController::class,'About']);

Route::get('admin-login',[AdminController::class,'index']);
Route::get('admin-register',[AdminController::class,'adminRegister']);
Route::get('admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard')->middleware('auth','user-type-access');
Route::get('admin/users',[AdminController::class,'users']);
Route::get('admin/consults',[AdminController::class,'consult']);
Route::get('admin/edituser/{id}',[AdminController::class,'edituser']);
Route::post('admin/update-user',[AdminController::class,'updateuser']);
Route::get('weather',[ConsultController::class,'weather']);
Route::get('consultancy',[ConsultController::class,'consult']);
Route::get('form',[ConsultController::class,'form']);
Route::post('mail',[AdminController::class,'mail']);

Route::get('verify-form/{token}',[ConsultController::class,'FormVerify'])->name('form.verify');

Route::post('save-form',[ConsultController::class,'saveform']);
/*Route::get('Otp',[ConsultController::class,'verify']);
Route::post('save',[ConsultController::class,'OtpVerify'])->name('save');*/
Route::get('product',[ConsultController::class,'product']);

Route::get('save-slot',[ConsultController::class,'slot']);
Route::post('get-consultants',[ConsultController::class,'getResult']);

Route::get('options',[ConsultController::class,'options'])->name('options');

Route::post('get-times',[ConsultController::class,'getTime']);
//Route::get('Paymentconsult/{id}',[ConsultController::class,'payment']);
//Route::post('payment-save', [ConsultController::class, 'paymentSave'])->name('payment.save');

Route::get('payment', [RazorpayPaymentController::class, 'index']);
Route::post('payment', [RazorpayPaymentController::class, 'store']);


Route::get('news',[AgriController::class,'news']);
//Scheme
Route::get('scheme',[SchemeController::class,'scheme']);
Route::get('schemeRegister',[SchemeController::class,'schemeRegister']);
Route::get('schemeMultistepform',[SchemeController::class,'schemeMultistepform']);
Route::get('viewAllScheme',[SchemeController::class,'viewAllScheme']);
Route::post('saveSubmitedSchemeForm',[SchemeController::class,'saveSubmitedSchemeForm']);
Route::get('schemeFormList',[SchemeController::class,'schemeFormList']);
Route::get('schemeDescription',[SchemeController::class,'schemeDescription']);

//admin

Route::get('addScheme',[AdminController::class,'addScheme']);
Route::post('saveScheme',[AdminController::class,'saveScheme']);
Route::get('schemeList',[AdminController::class,'schemeList']);
Route::get('updateScheme/{id}',[AdminController::class,'updateScheme']);
Route::post('updatedScheme',[AdminController::class,'updatedScheme']);
Route::get('deleteScheme/{id}',[AdminController::class,'deleteScheme']);
Route::get('farmersSubmitedFormList',[AdminController::class,'farmersSubmitedFormList']);
Route::get('updateStatusAccepted/{id}',[AdminController::class,'updateStatusAccepted']);
Route::get('updateStatusRejected/{id}',[AdminController::class,'updateStatusRejected']);

Route::get('admin/edit-product/{id}',[ProductController::class,'editProduct']);
Route::post('del-tools',[ProductController::class,'deleteTools'])->name('delete.tools.');
//Route::get('refresh-captcha',[AuthController::class,'refreshCaptcha'])->name('refresh.captcha');
Route::get('products',[ProductController::class,'index'])->name('products');
Route::get('tools',[ProductController::class,'tools'])->name('tools');
Route::get('seeds',[ProductController::class,'seeds'])->name('seeds');
Route::get('pasticides',[ProductController::class,'pasticides'])->name('pasticides');
Route::get('productlist',[ProductController::class,'productList'])->name('productlist');
Route::get('add-to-cart/{id}',[ProductController::class,'addToCart'])->name('addToCart');
Route::get('cart',[ProductController::class,'cart'])->name('cart');
Route::post('delete-cart-product',[ProductController::class,'deleteCartProduct'])->name('delete.cart.product');

Route::get('order',[ProductController::class,'order'])->name('order');
Route::post('save-order',[ProductController::class,'orderSave'])->name('save.order');
Route::get('payment/{id}', [ProductController::class, 'payment'])->name('payment');
Route::post('payment-save', [ProductController::class, 'paymentSave'])->name('payment.save');

Route::get('admin/products',[Admincontrol::class,'products']);
Route::get('admin/tools',[Admincontrol::class,'tools']);
Route::get('admin/seeds',[Admincontrol::class,'seeds']);
Route::get('admin/pasticides',[Admincontrol::class,'pasticides']);
Route::get('admin/add-product',[Admincontrol::class,'add_product']);
Route::get('admin/add-tools',[Admincontrol::class,'add_tools']);
Route::get('admin/add-seeds',[Admincontrol::class,'add_seeds']);
Route::get('admin/add-pasticides',[Admincontrol::class,'add_pasticides']);
Route::post('admin/save-tools',[Admincontrol::class,'saveTools'])->name('admin.add.tools');
Route::post('admin/save-seeds',[Admincontrol::class,'saveSeeds'])->name('admin.add.seeds');
Route::post('admin/save-pasticides',[Admincontrol::class,'savePasticides'])->name('admin.add.pasticides');
Route::post('admin/save-product',[Admincontrol::class,'saveProduct'])->name('admin.add.product');
Route::post('admin/update-product',[Admincontrol::class,'updateProduct'])->name('admin.updateproduct');







