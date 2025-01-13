<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Models\Feature;
use App\Models\Order;
use App\Models\Product;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleMiddleware;

Route::middleware([RoleMiddleware::class . ':admin'])->group(function () {
    Route::get('/admin', 'AdminController@index');
    Route::get('/admin/dashboard/{option}', function (string $option) {
    $orders = Order::with("user")->get();
    return view('admin-dashboard', ["option" => $option, "orders" => $orders]);
    })->middleware(['auth', 'verified'])->name('dashboard.option');
    Route::get('/admin/orders/{order}/manage', [OrderController::class, 'manage'])->name('orders.manage')->middleware(['auth', 'verified']);
    Route::put('/admin/orders/{order}', [OrderController::class, 'savemanaged'])->name('orders.savemanaged')->middleware(['auth', 'verified']);
});

Route::middleware([RoleMiddleware::class . ':customer'])->group(function () {

});


Route::get('/', function () {
    return view('welcome', ["products" => Product::with("features")->get()]);
})->name("home");

Route::get('/dashboard/{option}', function (string $option) {
    $user = Auth::user();
    $orders = $user->orders;
    return view('dashboard', ["option" => $option, "user" => $user, "orders" => $orders]);
})->middleware(['auth', 'verified'])->name('dashboard.option');
Route::get('/dashboard', function () {
    $user = Auth::user();
    $orders = $user->orders;
    return view('dashboard', ["orders"=> $orders, "user"=>$user]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/services', function () {
    $services = Feature::get();
    return view('services.index', ["services" => $services]);
})->name('services');

Route::get('/orders/create/{option}', [OrderController::class, "create"])->middleware(['auth', 'verified'])->name('orders.create');
Route::get('/orders/create', [OrderController::class, "create"])->middleware(['auth', 'verified'])->name('orders.create');
Route::post('/orders', [OrderController::class, "store"])->middleware(['auth', 'verified'])->name('orders.store');
Route::get('/orders/{order}/edit', [OrderController::class, "edit"])->middleware(['auth', 'verified'])->name('orders.edit');
Route::patch('/orders/{order}', [OrderController::class, 'update'])->middleware(['auth', 'verified'])->name('orders.update');
Route::delete('/orders/{order}', [OrderController::class, "destroy"])->middleware(['auth', 'verified'])->name('orders.destroy');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route::get('/dashboard/user-overview', [DashboardController::class, 'userOverview'])->name('user-overview')->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/dashboard/order-management', [DashboardController::class, 'orderManagement'])->name('order-management')->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/dashboard/customization-options', [DashboardController::class, 'customizationOptions'])->name('customization-options')->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/dashboard/support-section', [DashboardController::class, 'supportSection'])->name('support-section')->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/dashboard/analytics', [DashboardController::class, 'analytics'])->name('analytics')->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
