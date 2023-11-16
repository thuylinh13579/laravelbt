<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayController;
use Illuminate\Http\Request;
use App\Http\Controllers\signupController;
use App\Http\Controllers\formController;
use App\Http\Controllers\AdminController;
use App\Http\Requests\HotelRequest;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CreateTable;
use Illuminate\Database\Migrations\Migration;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShopaoquanController;

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
//     return view('welcome');
// });

// Route::get('/welcome', function () {
//     return ('chao mung cac ban den voi batrhrtgatrg');
// });
// Route::get('/hii', [hinhanh::class,'hi']);
// Route::get('/s', [paycontroller::class,'pay']);
// Route::get('/a', [titlecontroller::class,'title']);

// Route::get('/sum', [Request::class,'sum']);
// Route::post('/sum', function (Illuminate\Http\Request $request) {
//     $a = $request->input('a');
//     $b = $request->input('b');
//     $sum = $a + $b;
  
//     return "Tổng của $a và $b là $sum";
//   });
// Route::get('tinhtong',function(){
//     return view('sum');
// });
// Route::post('tinhtong','TongController@tinhtong');

// Route::get('/signup',[signupController::class,'index']);
// Route::post('/signup',[signupController::class,'displayInfo']);
// Route::get('/hotel', [AdminController::class,'adminindex']);
// Route::post('/hotel', [AdminController::class,'addRoom']);
Route::get('admin',function(){
    return view('');
});


Route::get('admin', function () {
    return view('adminpage');
});
// Route::get('/tong','cong@tinhtong' );
// Route::post('/tong','cong@cong' );
Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin', [AdminController::class, 'addRoom']);



Route::get('/sql', [CreateTable::class, 'table']);

Route::get('/admin-edit-form', [PageController::class, 'getAdminEdit']);
Route::post('/admin-edit', [PageController::class, 'postAdminEdit']);
// //      wishlist
// Route::prefix('wishlist') >group(function(){
//     route::get('/add/(id)'.[wishlistController::class,'AddWishlist']);
//     route::get('/delete/(id)'.[wishlistController::class,'DeleteWishlist']);
//     route::get('/oder'.[wishlistController::class,'OderWishlist']);
// });
Route::post('/admin-delete/{id}', [PageController::class, 'postAdminDelete']);														
Route::get('/product', [ShopController::class, 'getProduct']);	
Route::get('/aoquan', [ShopaoquanController::class, 'getAoquan']);	

Route::get('/trangchu', [PageController::class, 'getindex'])->name('trangchu');
// Route::get('/index', [PageController::class, 'getindex']);
Route::get('/loai-san-pham/{type}', [PageController::class, 'getLoaiSp'])->name('loai-san-pham');;
Route::get('/chi-tiet-san-pham', [PageController::class, 'getChitiet']);
Route::get('/lien-he', [PageController::class, 'getLienhe'])->name('lien-he');;
Route::get('/gioi-thieu', [PageController::class, 'getGioithieu'])->name('gioi-thieu');;
Route::get('/dang-ky', [PageController::class, 'getDangky']);
Route::post('/dang-ky', [PageController::class, 'postDangky']);
Route::get('/gio-hang', [PageController::class, 'getGiohang']);
Route::get('/giaa', [PageController::class, 'getGia']);
Route::get('/dang-nhap', [PageController::class, 'getDangnhap']);
Route::get('/kiem-tra-lai', [PageController::class, 'getKiemtralai']);
Route::get('/loi-404', [PageController::class, 'getloi']);