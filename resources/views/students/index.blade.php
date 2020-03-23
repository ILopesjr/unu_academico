@extends('master')

@section('content')
        <h1>Todos Alunos</h1>
        @foreach ($students as $student)
            <div class="card mt-4">
                <div class="card-body">
                    <h2>
                        <a href="{{ route('students.show', $student->id)}}">
                            {{$student->name}}
                        </a>
                        <a href="{{route('students.edit', $student->id)}}" class="btn btn-info">Editar</a>
                        <form onsubmit="return confirm('Realmente deseja deletar o aluno?')" class="d-inline-block" action="{{route('students.destroy', $student->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </h2>
                </div>
            </div>
        @endforeach
        <div class="mt-4">
            {{$students ?? ''->links()}}
        </div>
@endsection
