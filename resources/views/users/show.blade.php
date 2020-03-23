@extends('master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Detalhes dos Usuários</h1>
        </div>
        <div class="card-header">
            <h2>Nome: {{$user->name}}</h2>
        </div>
        <div class="card-body">
            <p>Username: {{$user->username}}</p>
        </div>
        <div class="card-body">
            <p>Email: {{$user->email}}</p>
        </div>
    </div>
@stop