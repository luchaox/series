@extends('layout')

@section('cabecalho')
    Adicionar série
@endsection

@section('conteudo')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('series.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col col-8">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control">
            </div>

            <div class="col col-2">
                <label for="qtd_temporadas" class="form-label">Nº de temporadas</label>
                <input type="number" name="qtd_temporadas" id="qtd_temporadas" class="form-control">
            </div>

            <div class="col col-2">
                <label for="ep_por_temporada" class="form-label">Epº por temporada</label>
                <input type="number" name="ep_por_temporada" id="ep_por_temporada" class="form-control">
            </div>
            
            <button class="btn btn-primary">
                Adicionar
            </button>
        </div>

    </form>
@endsection
