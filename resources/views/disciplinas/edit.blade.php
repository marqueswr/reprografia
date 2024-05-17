@extends('layouts.default')
@section('content')
<h5 class="alert alert-secondary">ALTERAR DISCIPLINA</h5><br>
<form action="{{ route('disciplina.update',['disciplina'=>$disciplina]) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome da disciplina"
                        value="{{ old('nome', $disciplina->nome) }}">
   
    <x-alert />
<br>
    <button type="submit" class="btn btn-primary">Gravar</button>
    <a class="btn btn-success" href="{{ route('disciplina.index') }}">Voltar</a>
</form>
@endsection