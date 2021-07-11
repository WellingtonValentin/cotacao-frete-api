<?php


namespace App\Services;


use App\Models\Transportadora;

class TransportadoraService
{
    public function list()
    {
        return Transportadora::all();
    }

    public function show($transportadora)
    {
        return Transportadora::find($transportadora);
    }
}
