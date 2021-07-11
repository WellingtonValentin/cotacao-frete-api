<?php


namespace App\Services;


use App\Models\CotacaoFrete;
use Illuminate\Database\Eloquent\Model;

class CotacaoFreteService
{

    /**
     * @param CotacaoFrete $model
     * @param array $data
     *
     * @return void
     */
    public function fill(&$model, $data)
    {
        $model->uf = $data['uf'];
        $model->percentual_cotacao = $data['percentual_cotacao'];
        $model->valor_extra = $data['valor_extra'];
        $model->transportadora_id = isset($data['transportadora'])
            ? $data['transportadora']['id'] : $data['transportadora_id'];
    }


    public function list()
    {
        return CotacaoFrete::all();
    }

    public function show($cotacaoFrete)
    {
        return CotacaoFrete::find($cotacaoFrete);
    }

    /**
     * @param array $data
     * @return CotacaoFrete
     */
    public function create($data)
    {
        $cotacaoFrete = new CotacaoFrete();
        $this->fill($cotacaoFrete, $data);
        $cotacaoFrete->save();

        return $cotacaoFrete;
    }

    /**
     * @param Model | array $data
     * @param CotacaoFrete $cotacaoFrete
     * @return CotacaoFrete
     */
    public function update($data, $cotacaoFrete)
    {
        $this->fill($cotacaoFrete, $data);
        $cotacaoFrete->save();

        return $cotacaoFrete;
    }


    /**
     * @param Model | string $model
     *
     * @param array|null $data
     * @throws \Exception
     */
    public function delete($cotacaoFrete)
    {
        $model = CotacaoFrete::find($cotacaoFrete);
        $model->delete();
    }
}
