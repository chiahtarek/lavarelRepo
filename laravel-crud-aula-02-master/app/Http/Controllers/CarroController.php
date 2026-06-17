<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CarroRequest;
use Illuminate\Support\Facades\Gate;
use App\Services\CarroService;
use App\Services\ClienteService;
use App\Models\Carro;

class CarroController extends Controller
{
    public function __construct(protected CarroService $carroService, 
    protected ClienteService $clienteService) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->carroService->all([], [],'placa' );
        return view('carro.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = $this->clienteService->all([], [], 'nome');
        return view('carro.create', compact(['clientes']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarroRequest $request)
    {
       $this->carroService->store($request->validated()); 
       return redirect()->route('carro.create'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
