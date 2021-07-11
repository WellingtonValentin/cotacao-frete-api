<?php

namespace App\Http\Controllers;

use App\Http\Requests\CotacaoFreteRequest;
use App\Models\CotacaoFrete;
use App\Services\CotacaoFreteService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CotacaoFreteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $response = (new CotacaoFreteService())->list();
            return response($response, Response::HTTP_OK);
        } catch (Exception $e) {
            return response($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param CotacaoFreteRequest $request
     * @return \Illuminate\Http\Response
     */
    public function create(CotacaoFreteRequest $request)
    {
        try {
            $response = (new CotacaoFreteService())->create($request->toArray());
            return response($response, Response::HTTP_OK);
        } catch (Exception $e) {
            return response($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CotacaoFreteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CotacaoFreteRequest $request)
    {
        try {
            $response = (new CotacaoFreteService())->create($request->toArray());
            return response($response, Response::HTTP_OK);
        } catch (Exception $e) {
            return response($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CotacaoFrete  $cotacaoFrete
     * @return \Illuminate\Http\Response
     */
    public function show(CotacaoFrete $cotacaoFrete)
    {
        try {
            $response = (new CotacaoFreteService())->show($cotacaoFrete);
            return response($response, Response::HTTP_OK);
        } catch (Exception $e) {
            return response($e->getMessage(), $e->getCode());
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  CotacaoFreteRequest  $request
     * @param  \App\Models\CotacaoFrete  $cotacaoFrete
     * @return \Illuminate\Http\Response
     */
    public function update(CotacaoFreteRequest $request, CotacaoFrete $cotacaoFrete)
    {
        try {
            $response = (new CotacaoFreteService())->update($request->toArray(), $cotacaoFrete);
            return response($response, Response::HTTP_OK);
        } catch (Exception $e) {
            return response($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CotacaoFrete  $cotacaoFrete
     * @return \Illuminate\Http\Response
     */
    public function destroy(CotacaoFrete $cotacaoFrete)
    {
        try {
            (new CotacaoFreteService())->delete($cotacaoFrete);
            return response(null, Response::HTTP_NO_CONTENT);
        } catch (Exception $e) {
            return response($e->getMessage(), $e->getCode());
        }
    }
}
