<?php

use App\Http\Controllers\webController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/dbconn', function () {
    return view('dbconn');
});

// Route ::get("/",[webController::class,"index"])->name("home");
Route ::get("/home",[webController::class,"index"])->name("home");
Route ::get("/UownDish",[webController::class,"index_UOwnDish"])->name("UownDish");
Route ::get("/Product",[webController::class,"product"])->name("product");
Route ::get("/sub",[webController::class,"showsub"])->name("sub");
// login and register routes
Route ::get("/UReg",[webController::class,"UReg"])->name("UReg");
Route ::post("/URegadd",[webController::class,"URegadd"])->name("URegadd");
Route ::get("/Ulogin",[webController::class,"Ulogin"])->name("Ulogin");
Route ::post("/Uloginvalid",[webController::class,"Uloginvalid"])->name("Uloginvalid");
Route ::get("/Ulogout",[webController::class,"Ulogout"])->name("Ulogout");
/// items route
Route::get('/items', [App\Http\Controllers\ItemController ::class, 'index'])->name('items');
Route::get('/meal', [App\Http\Controllers\ItemController ::class, 'meal'])->name('meal');
Route::get('/pizza', [App\Http\Controllers\ItemController ::class, 'pizza'])->name('pizza');
Route::get('/sandwiches', [App\Http\Controllers\ItemController ::class, 'sandwiches'])->name('sandwiches');
Route::get('/pasta', [App\Http\Controllers\ItemController ::class, 'pasta'])->name('pasta');
Route::get('/drinks', [App\Http\Controllers\ItemController ::class, 'drinks'])->name('drinks');
Route::get('/desserts', [App\Http\Controllers\ItemController ::class, 'desserts'])->name('desserts');
Route::get('/cart', [App\Http\Controllers\ItemController ::class, 'cart'])->name('cart');
/// payment
Route::get('/payment', function () {
    return view('payment');
})->name('payment');
/// contact us and about us
Route::get("/about_us", function () {
    return view("aboutUs");
});

Route::get("/contact_us", function () {
    return view("contactUs");
});
Route::post('contact_mail',[webController ::class,'contact_mail_send']);

