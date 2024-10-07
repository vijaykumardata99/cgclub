<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [Controller::class, 'index'])->name('index');
// Route::get('/about-cg-club', [Controller::class, 'aboutCgClub'])->name('about-cg-club');
Route::get('/about', [Controller::class, 'aboutCgClub']);
Route::get('/facilities', [Controller::class, 'facilities__s']);
Route::get('/amenties', [Controller::class, 'amenties__s']);
Route::get('/management', [Controller::class, 'management__s']);
Route::get('/programs', [Controller::class, 'programs__s']);
Route::get('/gallery', [Controller::class, 'gallery__s']);
Route::get('/contact', [Controller::class, 'contact__s']);
Route::get('/booking', [Controller::class, 'booking__s']);
Route::get('/faq', [Controller::class, 'faq__s']);
Route::get('/policies', [Controller::class, 'policies__s']);
Route::get('/other-clubs', [Controller::class, 'clubs__s']);
Route::get('/our-coach', [Controller::class, 'coach__s']);
Route::get('/timings', [Controller::class, 'timings__s']);


// Login Route
Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('login');

// Admin Routes
Route::group(['prefix' => '/admin', 'middleware' => ['auth.user', 'role.data', 'admin']], function () {

    Route::get('/otpVerification', [LoginController::class, 'otpVerification'])->name('otpVerification');
    Route::post('/verify-otp', [LoginController::class, 'verifyOtp'])->name('verify.otp');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // Route::get('/add-member', [AdminController::class, 'addMember'])->name('add-member');
    // Route::post('/store-member', [AdminController::class, 'storeMember'])->name('store-member');
    Route::get('/member-list', [AdminController::class, 'getMemberList'])->name('member-list');

    Route::get('/add-coach', [AdminController::class, 'addCoach'])->name('add-coach');
    Route::post('/store-coach', [AdminController::class, 'storeCoach'])->name('store-coach');
    Route::get('/coach-list', [AdminController::class, 'getCoachList'])->name('coach-list');

    // Route::get('/add-room', [AdminController::class, 'addRoom'])->name('add-room');
    // Route::post('/store-room', [AdminController::class, 'storeRoom'])->name('store-room');
    // Route::get('/room-list', [AdminController::class, 'getRoomList'])->name('room-list');
});

//member route start

Route::group(['prefix' => '/member', 'middleware' => ['auth.user', 'role.data', 'admin']], function() {
    Route::get('/member-dashboard', [MemberController::class, 'member_dashboard'])->name('member-dashboard');
});

Route::group(['prefix' => 'admin'], function () {
    route::get('/memberdetails', [AdminController::class, 'member_details'])->name('admin.memberdetails');
    route::post('/memberdetails', [AdminController::class, 'member_details_insert'])->name('admin.memberdetailsinsert');
});

//member route end

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');