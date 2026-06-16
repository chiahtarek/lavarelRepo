<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClienteRequest;
use Illuminate\Support\Facades\Gate;
use App\Models\Cliente;
use App\Services\ClienteService;

class ClienteController extends Controller
{

    public function __construct(protected ClienteService $service) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->service->all([], [],'nome' );
        return view('cliente.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClienteRequest $request)
    {
       $this->service->store($request->validated()); 
       return redirect()->route('cliente.index'); 
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
