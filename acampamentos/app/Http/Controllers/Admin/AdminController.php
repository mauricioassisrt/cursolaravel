<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Campista;

class AdminController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function index()
   {
    $campista = Campista::orderBy('nomeSobrenome', 'desc')->paginate(10);

    return view('admin.principal', compact('campista'));
   }


}
