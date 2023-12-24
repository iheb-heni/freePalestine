<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/home',[HomeController::class,'index'])->name('home');

Route::get('/product',[ProductController::class,'showProduct'])->name('showProduct');

Route::get('/products/list', [ProductController::class, 'showListProduct'])->name('product.list');
Route::get('/products/add', [ProductController::class, 'showAddProductForm'])->name('product.add');
Route::post('/products/save', [ProductController::class, 'handleAddProduct'])->name('product.save');
Route::delete('/products/delete/{id}', [ProductController::class, 'handleDeleteProduct'])->name('product.delete');
Route::get('/products/edit/{id}', [ProductController::class, 'handleEditProduct'])->name('product.edit');
Route::POST('/products/update/{id}', [ProductController::class, 'handleUpdateProduct'])->name('product.update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/users', [ProfileController::class, 'showUsers'])->name('users');
    Route::get('/add-product', [ProductController::class, 'showAddProductFormadmin'])->name('add-product');
    Route::post('/products/save', [ProductController::class, 'handleAddProduct'])->name('product.save');
    Route::get('/products', [ProductController::class, 'showListProductadmin'])->name('products');



});





require __DIR__.'/auth.php';
