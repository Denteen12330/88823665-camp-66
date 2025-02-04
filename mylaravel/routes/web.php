
<?php
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get("/mul", [MyController::class, 'myFunction']);
Route::post("/mul", [MyController::class, 'assign']);
Route::get("/", function () {
    //go to /login
    return redirect('login');
});
Route::get("/login", [LoginController::class, 'index']);
Route::get("/register", [RegisterController::class, 'index']);
Route::post("/register", [RegisterController::class, 'create']);
Route::get("/dashboard", [HomeController::class, 'index']);
Route::get("/user", [UserController::class, 'index']);
Route::get("/user/{id}", [UserController::class, 'edit']);
Route::put("/user", [UserController::class, 'edit_action']);
Route::delete('/user', [UserController::class, 'delete']);
Route::get("/500", [HomeController::class, 'error500']);
Route::get("/404", [HomeController::class, 'error404']);