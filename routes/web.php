<?php

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

use ORM\User;

Route::get('/create', function () {
    $user = User::create([
        'name' => 'José Matus',
        'email' => 'jose@gmail.com',
        'password' => bcrypt('123456'),
        'gender' => 'm',
        'biography' => 'Gran persona'
    ]);
    return 'Usuario Guardado';
});

Route::get('/update-user', function () {
    $user = User::find(1);
    $user->gender = 'f';
    $user->biography = 'Programador FullStack todo terreno';
    $user->save();
    return 'Usuario Actualizado';
});
