<?php

use App\Http\Controllers\ContactRequestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SeenController;
use App\Models\Info;
use Illuminate\Routing\RouteGroup;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// auth route for both
Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


        // Generate Reports v
    Route::get('/generate-report-all', function () {
        return view('admin.print.alldetails');
    })->name('generate-report-all');
    // Generate Reports     ^

        // start reply to message and seen
   Route::post('message-reply', [ReplyController::class,'reply'])->name('message-reply');
   Route::post('message-seen', [SeenController::class,'seen'])->name('message-seen');
    // end reply to message and seen

    Route::get('/generate-report-farmer',[InfoController::class,'show'])->name('generate-report-farmer');
    Route::get('/generate-report-farmerA',[InfoController::class,'showA'])->name('generate-report-farmerA');
    Route::get('/generate-selected-report-farmer',[InfoController::class,'showselected'])->name('generate-selected-report-farmer');
    Route::get('/generate-selected-report-farmerA',[InfoController::class,'showselectedA'])->name('generate-selected-report-farmerA');

    Route::get('/farmer-delete',[InfoController::class,'delete'])->name('farmer-delete');
    Route::get('/message-delete',[InfoController::class,'messagedelete'])->name('message-delete');
    Route::get('/report-delete',[InfoController::class,'reportdelete'])->name('report-delete');

    // Generate Reports v
    Route::get('/generate-report-farmers', function () {
        return view('admin.print.farmerdetails');
    })->name('generate-report-farmers');
    // Generate Reports ^

    Route::get('/generate-report-damages', function () {
        return view('admin.print.damagedetails');
    })->name('generate-report-damages');


Route::post('/dashboard-register',[App\Http\Controllers\ReportController::class,'store'])->name('dashboard-register');
Route::post('/dashboard-update',[App\Http\Controllers\ReportController::class,'update'])->name('dashboard-update');

// start contact routes
Route::post('/dashboard-contact-save',[App\Http\Controllers\ContactRequestController::class,'saveRequest'])->name('dashboard-contact-save'); //contactsave
Route::get('/callback-request',function() {
    return view('components.contact-greetings');
});
// end contact routes

// Add image start
Route::post('/dashboard-addimage',[ReportController::class,'addimage']
)->middleware(['auth'])->name('dashboard-addimage');

// add image end

// Add farmer start
Route::post('/dashboard-addfarmer',[InfoController::class,'addfarmer'])
->middleware(['auth'])->name('dashboard-addfarmer');

// add farmer end


// Add info start
Route::post('/dashboard-updateinfo',[InfoController::class,'editinfo'])
->middleware(['auth'])->name('dashboard-updateinfo');

// add info end

// Add search start
Route::get('/search-user',[SearchController::class,'searchuser'])
->middleware(['auth'])->name('search-user');

// add search end

Route::get('/Dashboard/exportfarmers-to-excel', [InfoController::class, 'exportfarmers'])->name('exportfarmers');
Route::get('/Dashboard/exportreports-to-excel', [InfoController::class, 'exportreports'])->name('exportreports');

Route::get('/Dashboard/damages/picture-delete',[ReportController::class,'picturedelete'])->name('picture-delete');




require __DIR__.'/auth.php';
