@extends('master')

@section('content')
    <h2 class="my-3">Atualização de Usuários</h2>
    @if ($errors->all())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
    @endif

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{session()->get('message')}}
        </div>
    @endif

    <form action="{{route('users.update', $user->id)}}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
        <label for="name">Nome</label>
            <input type="text" name="name" id="name" class="form-control" value='{{$user->name}}'>
        </div>
        <div class="form-group">
            <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" value='{{$user->username}}'>
            </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-info">Atualizar Usuário</button>
        </div>
    </form>
@endsection