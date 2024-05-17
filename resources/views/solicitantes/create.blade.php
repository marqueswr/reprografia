@extends('layouts.default')
@section('content')
<h5 class="alert alert-secondary">CRIAR SOLICITANTE</h5><br>
<form action="{{ route('solicitante.store') }}" method="POST">
    @csrf
    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do solicitante"
                        value="{{ old('nome') }}">
   
    <x-alert />
<br>
    <button type="submit" class="btn btn-primary">Gravar</button>
    <a class="btn btn-success" href="{{ route('solicitante.index') }}">Voltar</a>
</form>
@endsection