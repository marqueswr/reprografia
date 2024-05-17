@extends('layouts.default')
@section('content')
<h5 class="alert alert-secondary">ALTERAR SETOR</h5><br>
<form action="{{ route('setores.update',['setores'=>$setores]) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do setor"
                        value="{{ old('nome', $setores->nome) }}">
   
    <x-alert />
<br>
    <button type="submit" class="btn btn-primary">Gravar</button>
    <a class="btn btn-success" href="{{ route('setores.index') }}">Voltar</a>
</form>
@endsection