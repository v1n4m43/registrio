<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\QueuingController;
use App\Http\Controllers\Admin\ReportsController;
use App\Http\Controllers\Admin\BirthCertController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DeathCertController;
use App\Http\Controllers\Admin\BirthStoredController;
use App\Http\Controllers\Admin\DeathStoredController;
use App\Http\Controllers\Admin\MarriageCertController;
use App\Http\Controllers\Admin\MarriageStoredController;
use App\Http\Controllers\Employee\BirthCert\EBqueuingController;
use App\Http\Controllers\Employee\BirthCert\EBreportsController;
use App\Http\Controllers\Employee\DeathCert\EDqueuingController;
use App\Http\Controllers\Employee\DeathCert\EDreportsController;
use App\Http\Controllers\Employee\BirthCert\EBbirthCertController;
use App\Http\Controllers\Employee\BirthCert\EBdashboardController;
use App\Http\Controllers\Employee\DeathCert\EDdashboardController;
use App\Http\Controllers\Employee\DeathCert\EDdeathCertController;
use App\Http\Controllers\Employee\MarriageCert\EMqueuingController;
use App\Http\Controllers\Employee\MarriageCert\EMreportsController;
use App\Http\Controllers\Employee\BirthCert\EBbirthStorageController;
use App\Http\Controllers\Employee\DeathCert\EDdeathStorageController;
use App\Http\Controllers\Employee\MarriageCert\EMdashboardController;
use App\Http\Controllers\Employee\MarriageCert\EMmarriageCertController;
use App\Http\Controllers\Employee\MarriageCert\EMmarriageStorageController;

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
    return view('home.login');
});
Route::get('/home', function () {
    return view('home.home');
});


Route::get('/info', 'App\Http\Controllers\HomeController@showInfo')->name('info');


Route::get('registration.index', 'App\Http\Controllers\HomeController@showRequest')->name('registration.index');

Route::get('request.index', 'App\Http\Controllers\HomeController@showRequest')->name('request.index');


// Route::get('/login', [LoginController::class, 'create'])->middleware('guest')->name('login');
// Route::post('/login', [LoginController::class, 'store'])->middleware('guest');
// Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');



//__________________________________ADMIN PANEL___________________________________________________//
// Route::group(['middleware' => ['auth', 'role:admin']], function() {
// Route::get('/dashboard', function() {
//         return "Admin Dashboard";

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'dashboardShow'])->name('dashboard');


//User
Route::get('/user', [UserController::class, 'index'])->name('user');


//Birth Certificate
Route::get('/birth', [BirthCertController::class, 'index'])->name('birth');
Route::post('/submitbirth', [BirthCertController::class, 'SubmitBirth'])->name('birth.store');
Route::post('/birth/edit', [BirthCertController::class, 'BirthEdit'])->name('birth.edit');
Route::delete('/birth/delete/{id}', [BirthCertController::class, 'delete'])->name('birth.delete');


//Marriage License
Route::get('/marriage', [MarriageCertController::class, 'index'])->name('marriage');
Route::post('/submitmarriage', [MarriageCertController::class, 'SubmitMarriagelicense'])->name('marriage.store');
Route::post('/birth/edit', [MarriageCertController::class, 'MarriageLicenseEdit'])->name('marriagelicense.edit');
Route::delete('/birth/delete/{id}', [MarriageCertController::class, 'delete'])->name('marriage.delete');


//Death Certificate
Route::get('/death', [DeathCertController::class, 'index'])->name('death');


//Birth Storage
Route::get('/birthstored', [BirthStoredController::class, 'index'])->name('birthstored');


//Marriage Storage
Route::get('/marriagestored', [MarriageStoredController::class, 'index'])->name('marriagestored');


//Death Storage
Route::get('/deathstored', [DeathStoredController::class, 'index'])->name('deathstored');


//Queuing
Route::get('/queuing', [QueuingController::class, 'index'])->name('queuing');


//Reports
Route::get('/reports', [ReportsController::class, 'index'])->name('reports');


//     });
// });

//__________________________________Employee Birth Certificate___________________________________________________//
// Route::group(['middleware' => ['auth', 'role:birth_employee']], function() {
//     Route::get('/ebdashboard', function() {
//         return "Birth Employee Dashboard";

//Dashboard
Route::get('/ebdashboard', [EBdashboardController::class, 'index'])->name('ebdashboard');
Route::get('/ebdashboard', [EBdashboardController::class, 'dashboardShow'])->name('ebdashboard');


//Birth Registration
Route::get('/ebbirth', [EBbirthCertController::class, 'index'])->name('ebbirth');
Route::post('/employee/birthcert/create', [EBbirthCertController::class, 'create'])->name('ebbirth.create');
Route::post('/employee/birthcert', [EBbirthCertController::class, 'SubmitBirth'])->name('ebbirth.store');
Route::post('/employee/birthcert/edit', [EBbirthCertController::class, 'BirthEdit'])->name('ebbirth.edit');
Route::delete('/employee/birthcert/delete/{id}', [EBbirthCertController::class, 'delete'])->name('ebbirth.delete');


//Birth Storage
Route::get('/ebbirthstorage', [EBbirthStorageController::class, 'index'])->name('ebbirthstorage');


//Queuing
Route::get('/ebqueuing', [EBqueuingController::class, 'index'])->name('ebqueuing');


//Reports
Route::get('/ebreports', [EBreportsController::class, 'index'])->name('ebreports');


//     });
// });

//__________________________________Employee Marriage Certificate___________________________________________________//
// Route::group(['middleware' => ['auth', 'role:marriage_employee']], function() {
//     Route::get('/emdashboard', function() {
//         return "Marriage Employee Dashboard";

//Dashboard
Route::get('/emdashboard', [EMdashboardController::class, 'index'])->name('emdashboard');
Route::get('/emdashboard', [EMdashboardController::class, 'dashboardShow'])->name('emdashboard');


//Marriage Registration
Route::get('/emmarriage', [EMmarriageCertController::class, 'index'])->name('emmarriage');


//Marriage Storage
Route::get('/emmarriagestorage', [EMmarriageStorageController::class, 'index'])->name('emmarriagestorage');


//Queuing
Route::get('/emqueuing', [EMqueuingController::class, 'index'])->name('emqueuing');


//Reports
Route::get('/emreports', [EMreportsController::class, 'index'])->name('emreports');

//     });
// });


//__________________________________Employee Death Certificate___________________________________________________//
// Route::group(['middleware' => ['auth', 'role:death_employee']], function() {
//     Route::get('/eddashboard', function() {
//         return "Death Employee Dashboard";

//Dashboard
Route::get('/eddashboard', [EDdashboardController::class, 'index'])->name('eddashboard');
Route::get('/eddashboard', [EDdashboardController::class, 'dashboardShow'])->name('eddashboard');


//Death Registration
Route::get('/eddeath', [EDdeathCertController::class, 'index'])->name('eddeath');


//Death Storage
Route::get('/eddeathstorage', [EDdeathStorageController::class, 'index'])->name('eddeathstorage');


//Queuing
Route::get('/edqueuing', [EDqueuingController::class, 'index'])->name('edqueuing');


//Reports
Route::get('/edreports', [EDreportsController::class, 'index'])->name('edreports');

//     });
// });

