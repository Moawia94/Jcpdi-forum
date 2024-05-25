<?php

use App\Http\Controllers\VisitorsController;
use App\Livewire\AttendVisitor;
use App\Mail\Invitation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

// Route::view('/', 'welcome')->name('home');

Route::group(
    [

        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/', function () {
            return view('welcome');
        });
        Route::get('/privacy-policy', function () {
            return view('privacy_policy');
        });
    }
);

Route::get('ar/attendence/{input}',AttendVisitor::class);
Route::get('en/attendence/{input}',AttendVisitor::class);



Route::get('/mail', function () {

    foreach (['m.ahmed@spcc.com.sa','thmawia94@gmail.com' ] as $recipient) {
        Mail::to($recipient)->send(new Invitation());
    }

    return view('welcome');
});

Route::get('/invitation', function () {
    return view('emails.invitation');
});
