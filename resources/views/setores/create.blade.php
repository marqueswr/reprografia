@extends('layouts.default')
@section('content')
<h5 class="alert alert-secondary">CRIAR SETOR</h5><br>
<form action="{{ route('setores.store') }}" method="POST">
    @csrf
    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do setor"
                        value="{{ old('nome') }}">
   
    <x-alert />
<br>
    <button type="submit" class="btn btn-primary">Gravar</button>
    <a class="btn btn-success" href="{{ route('setores.index') }}">Voltar</a>
</form>
@endsection