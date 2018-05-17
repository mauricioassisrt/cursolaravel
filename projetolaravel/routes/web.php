<?php

//criado para utilizar e direcionar as rotas da aplicação quando cria o controler
//ele redireciona ou seja interliga a pagina com o controler em si
$this->group(['middleware' => ['auth'], 'namespace ' => 'Admin', 'prefix' => 'admin'], function () {
    $this->get('/', 'Admin\AdminController@index')->name('admin.home');
    // balance -no caso é a view o nome da pasta
    $this->get('balance', 'Admin\BalanceController@index')->name('admin.balance');
    $this->get('deposit', 'Admin\BalanceController@deposit')->name('balance.deposit');
    $this->post('deposit', 'Admin\BalanceController@depositStore')->name('deposit.store');
});

//está puxando da pasta App/http/controlers sitecontroler comando para crialo php artisan make:controller nomedocontroler
$this->get('/', 'SiteControle@index')->name('home');
Auth::routes();

