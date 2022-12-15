<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get("/admin" , [\App\Http\Controllers\RegController::class , "login"])->name("login");
Route::post("/admin" , [\App\Http\Controllers\RegController::class , "store"])->name("reg.check");
Route::post("/logout" , [\App\Http\Controllers\RegController::class , "logout"])->name("logout");

Route::get('/',[\App\Http\Controllers\PostController::class,"app"]);

Route::middleware(['auth'])->group(function (){
    Route::get('/admin/main', [\App\Http\Controllers\CompaniesController::class, "app"])->name("main");
    Route::get('/admin/companies', [\App\Http\Controllers\CompaniesController::class, "index"])->name("index");
    Route::get('/admin/create', [\App\Http\Controllers\CompaniesController::class, "create"]);
    Route::post('/admin/create', [\App\Http\Controllers\CompaniesController::class, "store"])->name("form.store");
    Route::get('/admin/{post}', [\App\Http\Controllers\CompaniesController::class, "show"])->name("form.show");
    Route::get('/admin/{post}/edit', [\App\Http\Controllers\CompaniesController::class, "edit"])->name("form.edit");
    Route::patch('/admin/{post}', [\App\Http\Controllers\CompaniesController::class, "update"])->name("form.update");
    Route::get('/admin/{post}/delete', [\App\Http\Controllers\CompaniesController::class, "delete"])->name("delete");
    Route::delete('/admin/{post}/destroy', [\App\Http\Controllers\CompaniesController::class, "destroy"])->name("destroy");;
});
Route::get("/user/employee" , [\App\Http\Controllers\EmployeeController::class, "index"])->name("user.index");
Route::get("/user/create" , [\App\Http\Controllers\EmployeeController::class, "create"])->name("user.create");
Route::post("/user/create" , [\App\Http\Controllers\EmployeeController::class, "store"])->name("user.store");
Route::get("/user/{employee}" , [\App\Http\Controllers\EmployeeController::class, "show"])->name("user.show");
Route::get("/user/{employee}/edit" , [\App\Http\Controllers\EmployeeController::class, "edit"])->name("user.edit");
Route::patch("/user/{employee}" , [\App\Http\Controllers\EmployeeController::class, "update"])->name("user.update");
Route::get('/user/{employee}/delete', [\App\Http\Controllers\EmployeeController::class, "delete"])->name("user.delete");
Route::delete('/user/{employee}/destroy',[\App\Http\Controllers\EmployeeController::class, "destroy"])->name("user.destroy");;
