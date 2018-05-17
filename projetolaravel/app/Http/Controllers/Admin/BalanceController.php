<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Balance;

class BalanceController extends Controller {

    public function index() {
        //recebo o valor em uma variavel 
        $balance = auth()->user()->balance;
        //se balance for diferente de null, retorno o ammount caso contrario retorno 0
        $amount = $balance ? $balance->amount : 0;

        //  $nome = auth()->user()->name;
        //nome da view a redirecionar 
        return view('admin.balance.index', compact('amount'));
    }

    public function deposit() {
        return view('admin.balance.deposit');
    }

    //recebe o valor vindo do form e repassa para o Model/Balance 
    public function depositStore(Request $request) {
        $balance = auth()->user()->balance()->firstOrCreate([]);
        $balance->deposit($request->value);
        
    }

}
