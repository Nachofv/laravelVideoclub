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

Route::get('/', function () {
    return view('index');
});

Route::get('login', function () {
    return view('auth.login');
});

Route::get('logout', function () {
    return view('logout');
});

Route::get('consultas/creacioConsultes', function () {
    return view('consultas.creacioConsultes');
});

Route::get('consultas/form_invitacions', function () {
    return view('consultas.form_invitacions');
});

Route::get('votos/profile', function () {
    return view('votos.profile');
});

Route::get('votos/listadoConsultas', function () {
    return view('votos.listadoConsultas');
});

