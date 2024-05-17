@extends('layouts.default')
@section('content')

<h5 class="alert alert-secondary">DETALHES DA SOLICITAÇÃO DE CÓPIAS</h5><br>

<div class="row">
    <div class="col-md-4 alert alert-primary">
        <b>Solicitante</b><hr>{{ $copia->solicitante }}
    </div>
    <div class="col-md-4 alert alert-primary">
        <b>Setor</b><hr>{{ $copia->setor }}
    </div>
    <div class="col-md-4 alert alert-primary">
        <b>Disciplina</b><hr>{{ $copia->disciplina }}
    </div>
</div>
</br>
<div class="row">
    <div class="col-md-3 alert alert-primary ">
        <b>Série</b><hr>{{ $copia->serie }}
    </div>
    <div class="col-md-3 alert alert-primary">
        <b>Data da requisição</b><hr>{{ $copia->dtaSolicitacao }}
    </div>
    <div class="col-md-3 alert alert-primary">
        <b>Quantidade de cópias</b><hr>{{ $copia->quantidade }}
    </div>
    <div class="col-md-3 alert alert-primary">
        <b>Tipo de impressão</b><hr>{{ $copia->tipoImpressao }}
    </div>
</div>
<br>
<div class="row">
    <div class="col-md alert alert-primary  text-bg-dark p-3">
        <b>Serviço</b><hr></h5>{{ $copia->descricao }}
    </div>
</div>


<br>
<a type="button" href="{{ route('copias.index') }}" class="btn btn-secondary">Voltar</a>
<a href="{{ route('copias.index') }}" type="submit" class="btn btn-outline-success">Voltar</a>

@endsection