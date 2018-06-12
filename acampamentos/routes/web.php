<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

$this->get('admin/principal', 'Admin\AdminController@index')->name('admin.home');
$this->get('/teste', 'ControllerPrincipal@index')->name('index');

$this->post('/', 'ControllerPrincipal@cadastroFormulario')->name('cadastroFormulario');
