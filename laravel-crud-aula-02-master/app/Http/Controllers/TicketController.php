<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InserirTicketRequest;
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
        $data = $this->ticketService->all([], [],'id' );
        return view('ticket.index', compact(['data']));
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
    public function store(InserirTicketRequest $request)
    {
       $dados = $request->validated();
       $dados['data_entrada'] = now();
       $dados['status'] = 'ABERTO';
       $this->ticketService->store($dados);
       return redirect()->route('ticket.create');
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
    public function darSaida(string $id)
    {
        $this->ticketService->darSaida($id);
        return redirect()->back()->with('success', 'Ticket finalizado com sucesso.');
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
