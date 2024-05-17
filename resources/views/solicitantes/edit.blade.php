@extends('layouts.default')
@section('content')
<h5 class="alert alert-secondary">ALTERAR SOLICITANTE</h5><br>
<form action="{{ route('solicitante.update',['solicitante'=>$solicitante]) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do solicitante"
                        value="{{ old('nome', $solicitante->nome) }}">
   
    <x-alert />
<br>
    <button type="submit" class="btn btn-primary">Gravar</button>
    <a class="btn btn-success" href="{{ route('solicitante.index') }}">Voltar</a>
</form>
@endsection