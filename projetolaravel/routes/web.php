<?php


$this->get('admin', 'Admin\AdminController@index')->name('admin.home');
//está puxando da pasta App/http/controlers sitecontroler comando para crialo php artisan make:controller nomedocontroler
$this->get('/', 'SiteControle@index')->name('home');
Auth::routes();

