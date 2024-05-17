@extends('layouts.default')
@section('content')
<h5 class="alert alert-secondary">CRIAR REGISTRO DE CÓPIA SOLICITADA</h5><br>
<form action="{{ route('copias.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-4">
            <select  id="solicitante" name="solicitante" class="form-select">
                <option value="">-- Selecione o Solicitante --</option>
                @foreach ($solicitantes as $solicitante)
                <option value="{{$solicitante->nome}}">
                    {{$solicitante->nome}}
                </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <select  id="setor"  name="setor" class="form-select">
                <option value="">-- Selecione o Setor --</option>
                @foreach ($setores as $setor)
                <option value="{{$setor->nome}}">
                    {{$setor->nome}}
                </option>
                @endforeach
            </select> 
        </div>
        <div class="col-md-4">
            <select  id="disciplina" name="disciplina" class="form-select">
                <option value="">-- Selecione a Disciplina --</option>
                @foreach ($disciplinas as $disciplina)
                <option value="{{$disciplina->nome}}">
                    {{$disciplina->nome}}
                </option>
                @endforeach
            </select>
        </div>
    </div>
<br>
<div class="row">
    <div class="col-md-3">
        <select  id="serie" name="serie" class="form-select">
            <option value="">-- Selecione a Série --</option>
            @foreach ($series as $serie)
            <option value="{{$serie->nome}}">
                {{$serie->nome}}
            </option>
            @endforeach
        </select>
    </div>
    <div class="col-md-3">
        <input class="form-control" type="date" id="dtaSolicitacao" name="dtaSolicitacao">
    </div>
    <div class="col-md-3">
        <input class="form-control"  type="number" id="quantidade" name="quantidade" placeholder="quantidade de cópias">
    </div>
    <div class="col-md-3">
    <select  name="tipoImpressao" id="tipoImpressao" class="form-select">
            <option value="">-- Selecione o tipo --</option>   
            <option value="colorida">
                colorida
            </option>
            <option value="monocromática">
                monocromática
            </option>
        </select>
    </div>
</div>       
<br>
  <div class="row">
    <div class="col-md">
        <label class="form-label">Descrição do serviço</label>
        <input class="form-control" type="text" 
        id="descricao" 
        name="descricao">
        
        </div>
  </div>
  <div class="row">
    <div class="col-md">
        <br>
        <button type="submit" class="btn btn-primary">Gravar</button>
        <a href="{{ route('copias.index') }}" type="submit" class="btn btn-outline-success">Voltar</a>
    </div>
   
    <x-alert />
</form>
@endsection