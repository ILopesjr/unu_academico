@extends('master')

@section('content')
    <h2 class="my-3">Adicionar Aluno</h2>
    @if ($errors->all())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
    @endif
    <form action="{{route('students.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="birthdate">Data Nascimento</label>
            <input type="date" name="birthdate" id="birthdate" class="form-control w-25 p-2">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-info">Adicionar Aluno</button>
        </div>
    </form>
@endsection