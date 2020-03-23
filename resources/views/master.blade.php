<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unu Acadêmico</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
    <div class="bg-info text-white p-5 mb-3">
        <a href="{{ route('students.index')}}" class="btn btn-secondary">Home</a>
        <a href="{{ route('students.create')}}" class="btn btn-secondary">Cadastro de Alunos</a>
        <a href="{{ route('users.index')}}" class="btn btn-secondary">Listagem Usuários</a>
        @auth
    <form class="d-inline-block float-right" action="{{route('logout')}}" method="POST">
                @csrf
    <button type="submit" class="btn btn-secondary">{{auth()->user()->name}} | Logout</button>
            </form>
        @else
            <a href="{{route('login')}}" class="btn btn-secondary">Login</a>
        @endauth
    </div>
    <div class="container">
        @yield('content')
    </div>
    <div class="bg-dark text-white p-4 text-center">
        All rights reserved Ivanildo Lopes {{date('Y')}}.
    </div>
</body>
</html>