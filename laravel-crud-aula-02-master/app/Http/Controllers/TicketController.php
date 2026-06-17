<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TicketRequest;
use App\Services\TicketService;
use App\Services\VagaService;
use App\Services\CarroService;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function __construct(protected TicketService $ticketService, 
    protected VagaService $vagaService, protected CarroService $carroService) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vagas = $this->vagaService->all([], [],'descricao' );
        $carros = $this->carroService->all([], [],'placa'); 
        return view('ticket.create', compact('vagas', 'carros'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
