@extends('layouts.default')
@section('content')
<h5 class="alert alert-secondary">CRIAR SÉRIE</h5><br>
<form action="{{ route('serie.store') }}" method="POST">
    @csrf
    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome da série"
                        value="{{ old('nome') }}">
   
    <x-alert />
<br>
    <button type="submit" class="btn btn-primary">Gravar</button>
    <a class="btn btn-success" href="{{ route('serie.index') }}">Voltar</a>
</form>
@endsection