<?php

use App\Http\Controllers\CasaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\UserController;
use App\Mail\NotificationsMailable;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;



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

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/', function () {
    return redirect('/casa');
})->middleware('auth');


Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
})->name('redireck-google');

Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();

    $userExists = User::where('external_id', $user->getId())->where('external_auth', 'google')->first();
    $userNewExists = User::where('email', $user->email)->first();

    // usuario registrado netamente de google
    if ($userExists) {
        Auth::login($userExists);
        return redirect()->route('casa.index');

    } //usuario registrado  primero en  la pagina y luego en google
    if ($userNewExists) {
        $userNewExists->update([
            'external_id' => $user->getId(),
            'external_auth' => 'google'
        ]);
        Auth::login($userNewExists);
        return redirect()->route('casa.index');

    } //usuario nuevo de google
    else {
        $userNew = User::create([
            'username' => $user->name,
            'email' => $user->email,
            'external_id' => $user->getId(),
            'external_auth' => 'google'
        ]);

        $userNew->roles()->sync(2);
        return redirect()->route('change.password', compact('userNew'));
    }


});



Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.perform');
    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
    Route::get('/reset-password', [ResetPassword::class, 'show'])->name('reset-password');
    Route::post('/reset-password', [ResetPassword::class, 'send'])->name('reset.perform');
    Route::get('/change-password/{userNew}', [ChangePassword::class, 'show'])->name('change.password');
    Route::post('/change-password/{userNew}', [ChangePassword::class, 'update'])->name('change.perform');
    Route::get('/change', [ChangePassword::class, 'show_password'])->name('change-password');
    Route::post('/change', [ChangePassword::class, 'update_password'])->middleware('guest')->name('change-perfom');

});

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware('auth', 'can:dashboard');


Route::get('/principals', [CasaController::class, 'home'])->name('casa.home');



Route::prefix('comment')->middleware('auth')->group(function () {
    Route::get('/', [CommentController::class, 'index'])->name('comment.index');
    Route::post('/{id}', [CommentController::class, 'store'])->name('comment.store');
    Route::patch('/{comment}', [CommentController::class, 'update'])->name('comment.update');
    Route::delete('/{comment}', [CommentController::class, 'destroy'])->name('comment.destroy');
});


Route::prefix('casa')->controller(CasaController::class)->middleware('auth')->group(function () {
    Route::get('/', 'index')->name('casa.index');
    Route::get('/filter', 'index')->name('casa.filter');
    Route::get('/create', 'create')->name('casa.create');
    Route::post('/', 'store')->name('casa.store');
    Route::get('/{casa}/edit', 'show')->name('casa.show');
    Route::get('/administer', 'administer')->name('casa.administer');
    Route::get('/{casa}', 'edit')->name('casa.edit');
    Route::patch('/{casa}', 'update')->name('casa.update');
    Route::get('/change_status/{casa}', 'change_status')->name('casa.change_status');
    Route::post('/category', 'category')->name('casa.category');

});

Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::get('/casas', [UserController::class, 'administer_casa'])->name('admin.casas');
    Route::get('/user/change_status/{user}', [UserController::class, 'change_status'])->name('user.change_status');
});

Route::prefix('company')->group(function () {
    Route::get('/terminos', [PageController::class, 'terminos'])->name('terminos');
    Route::get('/faq', [PageController::class, 'faq'])->name('faq');
    Route::get('/sobre', [PageController::class, 'sobre'])->name('sobre');
    Route::get('/privacidad', [PageController::class, 'privacidad'])->name('privacidad');
});

Route::prefix('utils')->middleware('auth')->group(function () {

    Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
    Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');

    Route::get('/plans', [PageController::class, 'plans'])->name('plans');
    Route::get('/{page}', [PageController::class, 'index'])->name('page');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::prefix('notifications')->group(function () {
    Route::get('mark-all-notifications', [NotificationController::class, 'all_notifications '])->name('mark-all-notifications');
    Route::get('one-notifications/{notification_id}/{casa_id}', [NotificationController::class, 'one_notifications'])->name('one_notifications');

    Route::get('/', [NotificationController::class, 'index'])->name('notifications.index');
    Route::post('/', [NotificationController::class, 'store'])->name('notifications.store');
});

