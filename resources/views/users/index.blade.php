@extends('master')

@section('content')
        <h1>Todos Usuários</h1>
        @foreach ($users as $user)
            <div class="card mt-4">
                <div class="card-body">
                    <h2>
                        <a href="{{ route('users.show', $user->id)}}">
                            {{$user->name}}
                        </a>
                        <a href="{{route('users.edit', $user->id)}}" class="btn btn-info">Editar</a>
                        <form onsubmit="return confirm('Realmente deseja deletar o Usuário?')" class="d-inline-block" action="{{route('users.destroy', $user->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </h2>
                </div>
            </div>
        @endforeach
        <div class="mt-4">
            {{$users ?? ''->links()}}
        </div>
@endsection
