<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BalanceController extends Controller {

    public function index() 
    {
        //nome da view a redirecionar 
        return view('admin.balance.index');
    }

}
