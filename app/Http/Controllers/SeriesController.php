<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request) {
        $series = Serie::get();
        $mensagem = $request->session()->get('mensagem');
        return view('series.index', compact('series', 'mensagem'));
    }

    public function create() {

        return view('series.create');
    }

    public function store(Request $request) {
        $dados = $request->except("_token");
        
        //grava o campo nome na tabela serie
        $serie = Serie::create(['nome' => $request->nome]);

        //loop na quantidade de temporada
        $qtdTemporadas = $request->qtd_temporadas;
        for($i = 1; $i <= $qtdTemporadas; $i++ ){
            //grava o numero do indice na tabela temporada
            $temporada = $serie->temporadas()->create(['numero' => $i]);
            //cria o segundo loop dentro do primeiro gravando o episodio
            for ($j = 1; $j <= $dados['ep_por_temporada']; $j++) {
                $temporada->episodios()->create(['numero' => $j]);

            }
        }

        $request->session()->flash(
            'mensagem',
            "Série {$serie->id} criado com sucesso {$serie->nome}"
        );
        return redirect()->route('list_series');
    }

    public function destroy(Request $request)
    {
        Serie::destroy($request->id);

        $request->session()->flash(
            'mensagem',
            'Série removida com sucesso.'
        );

        return redirect()->route('list_series');
    }

}
