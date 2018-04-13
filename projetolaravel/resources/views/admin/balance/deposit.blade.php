@extends('adminlte::page')

@section('title', 'Deposito')

@section('content_header')
<h1>Fazer Recarga </h1>

<ol class="breadcrumb">
    <li> <a href="">Dashboard</a></li>
    <li><a href="">Saldo</a></li>
    <li><a href="">Depositar</a></li>
</ol>
@stop

@section('content')
<div class="box">
    <div class="box-header">

        <h3>Fazer Recarga </h3>

        <div class="box-body">
            <form method="POST" action="{{route('deposit.store')}}">
                {!!csrf_field()!!}
                <div class="form-group">
                    <input type="text" name="value" placeholder="Valor Recarga" class="form-control"/>
                </div>

                <div class="form-group">
                    <input type="submit" value="Recarregar"  class="btn btn-success"/>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@stop