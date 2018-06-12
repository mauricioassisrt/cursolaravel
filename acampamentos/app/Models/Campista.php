<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campista extends Model
{
    public $timestamps = false;

    public function formulario($nome)
    {
      $campista = $this->nome;
      $campista = $this->save();

      if ($campista) {
        return $message="Sucesso";
      }else {
        return $message="Err";
      }
    }
}
