@extends('adminlte::page')

@section('title', 'Saldo')

@section('content_header')
<h1>Saldo</h1>
<ol class="breadcrumb">
    <li> <a href="">Dashboard</a></li>
    <li><a href="">Saldo</a></li>
</ol>

@stop

@section('content')
<div class="box">
    <div class="box-header">
        <div class="box-header"> 
            <a href="{{route('balance.deposit')}}" class="btn btn-primary">Recarregar <i class="fa fa-cart-plus"></i></a>
            <a href="" class="btn btn-danger">Sacar <i class="fa fa-cart-plus"></i></a>
        </div>
        <div class="small-box bg-green">
            <div class="inner">
              
                <h3>R${{$amount}}</h3>
                
            </div>
            
            <div class="icon">
                <i class="ion ion-cash"></i>
            </div>
            <a href="#" class="small-box-footer">Historico <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>

@stop