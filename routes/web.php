<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\Account;

//to load main menu

Route::get('/',[Users::class, 'Home'] );
Route::get('/register',[Users::class, 'showForm'] );
Route::get('/view',[Users::class, 'View'] );


//to create curds

Route::any('/create',[Users::class, 'store'] );
Route::any('/update/{id}',[Users::class, 'showUpdateForm'] );
Route::any('/update',[Users::class, 'Update'] );
Route::any('/delete/{id}',[Users::class, 'Delete'] );


//to create account

Route::any('/login',[Account::class, 'LoginForm'] );
Route::any('/auth',[Account::class, 'Authenticaion'] );
Route::any('/forgot',[Account::class, 'Forget'] );
Route::any('/reset',[Account::class, 'Reset'] );


