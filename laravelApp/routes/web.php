
<?php
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\CheckLogin;

Route::get("/product", [ProductController::class, 'index'])->middleware(CheckLogin::class);
Route::post("/product", [ProductController::class, 'store'])->middleware(CheckLogin::class);
Route::get("/mul", [MyController::class, 'myFunction']);
Route::post("/mul", [MyController::class, 'assign']);

Route::get("/", function () {return redirect('dashboard');});
Route::get("/login", [LoginController::class, 'index']);
Route::post("/login", [LoginController::class, 'login']);
Route::get("/logout", function () {
    session()->forget('user');
    return redirect('login');
});
Route::get("/register", [RegisterController::class, 'index']);
Route::post("/register", [RegisterController::class, 'create']);

Route::get("/dashboard", [HomeController::class, 'index'])->middleware(CheckLogin::class);

Route::get("/user", [UserController::class, 'index']);
Route::get("/user/{id}", [UserController::class, 'edit']);
Route::put("/user", [UserController::class, 'edit_action']);
Route::delete('/user', [UserController::class, 'delete']);

Route::get("/500", [HomeController::class, 'error500']);
Route::get("/404", [HomeController::class, 'error404']);
