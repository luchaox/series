@extends('layout')

@section('cabecalho')
    Adicionar série
@endsection

@section('conteudo')
    <form action="{{ route('series.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>

        <button class="btn btn-primary">
            Adicionar
        </button>
        
    </form>
@endsection