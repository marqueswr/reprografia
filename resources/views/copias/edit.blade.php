@extends('layouts.default')
@section('content')
<h5 class="alert alert-secondary">ALTERAR REGISTRO DE CÓPIA LANÇADA</h5><br>
<form action="{{ route('copias.update',['copia'=>$copia]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">

        <div class="col-md-4">
            <label class="form-label"><b>Solicitante</b></label>
            <select name="solicitante" id="solicitante" class="form-select">
                <option value="">Selecione</option>
                @forelse ($solicitantes as $sol)
                    <option value="{{ $sol->nome }}"
                        {{ old('solicitante', $copia->solicitante) == $sol->nome ? 'selected' : '' }}>
                        {{ $sol->nome }}</option>
                @empty
                    <option value="">Nenhum solicitante encontrado</option>
                @endforelse
            </select>
        </div>

        <div class="col-md-4">
            <label class="form-label"><b>Setor</b></label>
            <select name="setor" id="setor" class="form-select">
                <option value="">Selecione</option>
                @forelse ($setores as $setor)
                    <option value="{{ $setor->nome }}"
                        {{ old('setor', $copia->setor) == $setor->nome ? 'selected' : '' }}>
                        {{ $setor->nome }}</option>
                @empty
                    <option value="">Nenhum setor encontrado</option>
                @endforelse
            </select>
        </div>
   
        <div class="col-md-4">
            <label class="form-label"><b>Disciplina</b></label>
            <select name="disciplina" id="disciplina" class="form-select">
                <option value="">Selecione</option>
                @forelse ($disciplinas as $disciplina)
                    <option value="{{ $disciplina->nome }}"
                        {{ old('disciplina', $copia->disciplina) == $disciplina->nome ? 'selected' : '' }}>
                        {{ $disciplina->nome }}</option>
                @empty
                    <option value="">Nenhuma disciplina encontrada</option>
                @endforelse
            </select>
        </div>

       <br><br>
<br><br>
<div class="row">
    <div class="col-md-3">
        <label class="form-label"><b>Série</b></label>
        <select name="serie" id="serie" class="form-select">
            <option value="">Selecione</option>
            @forelse ($series as $serie)
                <option value="{{ $serie->nome }}"
                    {{ old('serie', $copia->serie) == $serie->nome ? 'selected' : '' }}>
                    {{ $serie->nome }}</option>
            @empty
                <option value="">Nenhuma série encontrada</option>
            @endforelse
        </select>
    </div>
    <div class="col-md-3">
        <label class="form-label"><b>Data da requisição</b></label>
        <input class="form-control" type="date" id="dtaSolicitacao" name="dtaSolicitacao"  value="{{ old('dtaSolicitacao', $copia->dtaSolicitacao) }}">
    </div>
  
    <div class="col-md-3">
        <label class="form-label"><b>Quantidade de cópias</b></label>
        <input class="form-control"  type="number" id="quantidade" name="quantidade"  value="{{ old('quantidade', $copia->quantidade) }}">
    </div>
    <div class="col-md-3">
        <label class="form-label"><b>Tipo de impressão</b></label>

    <select  name="tipoImpressao" id="tipoImpressao" class="form-select">
            <option value="{{ $copia->tipoImpressao }}">{{ $copia->tipoImpressao }}</option>   
            <option value="monocromática">
               monocromática
            </option>
             <option value="colorida">
               colorida
            </option>
        </select> 
    </div>
</div>       
<br><br><br><br>
  <div class="row">
    <div class="col-md">
        <label class="form-label"><b>Descrição do serviço</b></label>
        <input class="form-control" type="text"  id="descricao" name="descricao"  value="{{ old('descricao', $copia->descricao) }}"/>
        
        </div>
  </div>
  <div class="row">
    <div class="col-md">
        <br>
        <button type="submit" class="btn btn-primary">Alterar</button>
        <a href="{{ route('copias.index') }}" type="submit" class="btn btn-outline-success">Voltar</a>
    </div>
   
    <x-alert />
</form>
@endsection