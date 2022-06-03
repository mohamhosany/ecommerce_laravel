<?php

// use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\HomeController;
// use App\Http\Livewire\HomeComponent;

use App\Http\Livewire\Admin\Users\ListUsers;
use App\Http\Livewire\Admin\Users\AddUsers;
use App\Http\Livewire\Admin\Orders\ListOrdesrs;
use App\Http\Livewire\Admin\Products\ProductsList;
use App\Http\Livewire\Admin\Products\AddProducts;
use App\Http\Livewire\Admin\Collections\CollectionList;
use App\Http\Livewire\Admin\Collections\AddCollections;
use App\Http\Livewire\Admin\Inventory\InventoryList;
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

//Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('admin/users', ListUsers::class)->name('admin.users');
Route::get('admin/users/add-users',AddUsers::class)->name('admin.users.addusers');
Route::get('admin/orders', ListOrdesrs::class)->name('admin.orders');
Route::get('admin/products', ProductsList::class)->name('admin.products');
Route::get('admin/products/Add-Products', AddProducts::class)->name('admin.products.AddProducts');
Route::get('admin/collections', CollectionList::class)->name('admin.collections');
Route::get('admin/inventory', InventoryList::class)->name('admin.inventory');

Route::get('admin/collections/Add-Collections', AddCollections::class)->name('admin.collections.AddCollections');
Route::get('admin/dashboard', dashboardController::class)->name('admin.dashboard');
/*  dashboardController@index  */
?>


