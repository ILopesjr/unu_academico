@extends('master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Detalhes dos alunos</h1>
        </div>
        <div class="card-header">
            <h2>Nome: {{$student->name}}</h2>
        </div>
        <div class="card-body">
            <p>Data de Aniversário: {{$student->birthdate}}</p>
        </div>
    </div>
@stop