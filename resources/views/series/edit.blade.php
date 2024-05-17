@extends('layouts.default')
@section('content')
<h5 class="alert alert-secondary">ALTERAR SÉRIE</h5><br>
<form action="{{ route('serie.update',['serie'=>$serie]) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome da série"
                        value="{{ old('nome', $serie->nome) }}">
   
    <x-alert />
<br>
    <button type="submit" class="btn btn-primary">Gravar</button>
    <a class="btn btn-success" href="{{ route('serie.index') }}">Voltar</a>
</form>
@endsection