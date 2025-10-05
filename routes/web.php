<?php


use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ContactController;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/project', 'project')->name('project');

// ✅ Halaman contact GET (form)
Route::get('/contact', [ContactController::class, 'show'])->name('contact');

// ✅ Kirim contact POST (form submit)
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');



//Route::get('/contact', [ContactController::class, 'index']);


// Route::get('/', function () {
//     return view('welcome');
// });

//Route::view('/contact', 'contact')->name('contact');
// Tampilan form contact (GET)
//Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');

// Kirim form contact (POST)


Route::get('/cv', function () {
    return view('cv');
});
Route::get('/cv1', function () {
    return view('cv1');
});
Route::get('/cv2', function () {
    return view('cv2');
});
Route::get('/cv3', function () {
    return view('cv3');
});
Route::get('/cv4', function () {
    return view('cv4');
});
Route::get('/cv5', function () {
    return view('cv5');
});
Route::get('/cv6', function () {
    return view('cv6');
});
Route::get('/cv7', function () {
    return view('cv7');
});
Route::get('/cv8', function () {
    return view('cv8');
})->name('cv8');

Route::get('/cv9', function () {
    return view('cv9');
});
Route::get('/chess', function () {
    return view('chess');
});
Route::get('/mcgg', function () {
    return view('mcgg');
});
Route::get('/mcgg1', function () {
    return view('mcgg1');
});
Route::get('/mcgg2', function () {
    return view('mcgg2');
});