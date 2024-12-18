<?php

namespace App\Http\Controllers\API;

use App\Models\Finances;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinancesController extends Controller
{
    /*
    MÉTODO PRIMÁRIO DO GET PARA TRAZER TODOS OS RESULTADOS DO DB
     */
    public function index()
    {
        return json_encode(Finances::all());
    }

    /*
       MÉTODO POST PARA CRIAR ALGUM DADO NO NOSSO BANCO DE DADOS
    */
    public function store(Request $request)
    {
        $insert = Finances::create($request->all());
    }

    /**
     *MÉTODO GET PARA TRAZER UM ÚNICO RESULTADO PELO ID
     */
    public function show($finances)
    {
        return json_encode(Finances::find($finances));
    }

    /*
     * MÉTODO PUT PARA FAZER O UPDATE E ATUALIUZAR O OS DADOS DO DB
     */
    public function update(Request $request, $finances)
    {
        $update = Finances::find($finances)->update($request->all());
    }

    /**
     * MÉTODO DELETE QUE IRÁ DELETAR OS DADOS SELECIONADOS 
     */

    public function destroy($finances)
   {
        $delete = Finances::find($finances)->delete();
    }
}
