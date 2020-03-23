@extends('master')

@section('content')
    <h2 class="my-3">Atualização de Aluno</h2>
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

    <form action="{{route('students.update', $student->id)}}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
        <label for="name">Nome</label>
            <input type="text" name="name" id="name" class="form-control" value='{{$student->name}}'>
        </div>
        <div class="form-group">
            <label for="birthdate">Data de Nascimento</label>
            <input type="date" name="birthdate" id="birthdate" class="form-control w-25 p-2" value="{{$student->birthdate}}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-info">Atualizar Aluno</button>
        </div>
    </form>
@endsection