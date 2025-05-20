<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Room;
use App\Models\User;

use App\Models\Message;
use App\Models\Admin;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PayMongoController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users/booking/details/dashboard', function () {
    $rooms = Room::all();
    $users = User::all();
    $bookings = Booking::where('user_id', Auth::id())->with('room')->get();
    return view('usersbookingdetails', compact('rooms', 'users', 'bookings'));
})->middleware(['auth', 'verified'])->name('bookings.details');




Route::get('/mybookings/dashboard', function () {
    $rooms = Room::all();
    return view('userbookingdashboard', compact('rooms'));
})->middleware(['auth', 'verified'])->name('book.dashboard');



Route::get('/dashboard', function () {
    $rooms = Room::all();
    $admins = Admin::all();
    return view('dashboard', compact('rooms', 'admins'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create')->middleware(['auth', 'verified'])->name('dashboard'); // Display form
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store'); // Handle form submission

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/admin/login', [AdminController::class, 'view'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'store'])->name('login.admin');
Route::post('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

Route::middleware('auth:admin')->group(function () {
    Route::put('/rooms/{room}', [RoomController::class, 'update'])->name('rooms.update');
    Route::delete('/rooms/{id}', [RoomController::class, 'destroy'])->name('rooms.destroy');
    Route::get('/rooms/{room}/edit', [RoomController::class, 'edit'])->name('update.forms');
    Route::get('/admin/dashboard', function () {
        $rooms = Room::all();
        $users = User::all();
        $bookings = Booking::all();

        // 
        return view('admin_dashboardrooms', compact('rooms', 'users', 'bookings')); // 
    })->name('admin.dashboard');

    Route::get('/addroom', function () {
        $rooms = Room::all(); // 
        return view('addroomdashboard', compact('rooms')); // 
    })->name('addroom');

    Route::get('/messages/dashboard', function () {
        $messages = Message::all();
        $admins = Admin::all();
        return view('adminmessagesdashboard', compact('admins', 'messages'));
    })->middleware(['auth', 'verified'])->name('messages.user');
    Route::get('/costumer', function () {
        $rooms = Room::all();
        $users = User::all();
        $bookings = Booking::all(); // 
        return view('admin_costumer_dashboard', compact('rooms', 'users', 'bookings')); // 
    })->name('costumer');

    Route::get('/rooms/create', [RoomController::class, 'create'])->name('rooms.create');

    Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');
});
Route::post('/messages', [AdminController::class, 'storesmessage'])->name('messages.store');
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
Route::delete('/booking/cancel/{id}', [BookingController::class, 'cancel'])->name('booking.cancel');
Route::post('/booking/cancel/{id}', [BookingController::class, 'cancel'])->name('booking.cancel');
Route::post('/users/{id}/update-status', [AdminController::class, 'updateStatus'])->name('users.updateStatus');


Route::get('/pay/gcash', [PayMongoController::class, 'createGCashPayment'])->name('pay.gcash');
Route::get('/payment/success', [PayMongoController::class, 'success'])->name('payment.success');
Route::get('/payment/cancel', [PayMongoController::class, 'cancel'])->name('payment.cancel');
require __DIR__ . '/auth.php';
