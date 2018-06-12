<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campista;
use App\Http\Controllers\Controller;

class ControllerPrincipal extends Controller
{
  public function index()
  {
    $campista = Campista::orderBy('nomeSobrenome', 'desc')->paginate(10);
    // dd(['campista' => $campista]);
      return view('teste', compact('campista') );
    // return view('teste');
  }
  public function cadastroFormulario(Request $request)
 {
   $campista = new Campista;

   if ($request !=null) {
    $campista->nomeSobrenome = $request->nomeSobrenome;
    $campista->telefone = $request->telefone;

    $campista->save();

    return redirect()->route('index')->with('message', 'Product created successfully!');

   }else{
     return "Erro";
   }

//    dd($campista);


 }
}
