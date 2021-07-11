<?php

namespace App\Http\Controllers;

use App\Models\Transportadora;
use App\Services\TransportadoraService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Exception;

class TransportadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $response = (new TransportadoraService())->list();
            return response($response, Response::HTTP_OK);
        } catch (Exception $e) {
            return response($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transportadora  $transportadora
     * @return \Illuminate\Http\Response
     */
    public function show(Transportadora $transportadora)
    {
        try {
            $response = (new TransportadoraService())->show($transportadora);
            return response($response, Response::HTTP_OK);
        } catch (Exception $e) {
            return response($e->getMessage(), $e->getCode());
        }
    }
}
