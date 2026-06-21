<?php

namespace App\Services;

use App\Repositories\TicketRepository;
use Carbon\Carbon;

class TicketService extends BaseService {

    public function __construct(protected TicketRepository $repository) {}

    protected function getRepository(): mixed
    {
        return $this->repository;
    }

    public function darSaida(int $id){
        $ticket = $this->repository->find($id);

        $entrada = Carbon::parse($ticket->data_entrada);
        $saida = now();

        $horas = max(1, $entrada->diffInHours($saida));
        $valor = $horas * 10;

        return $this->repository->finalizar($id, [
            'data_saida' => $saida,
            'status' => 'FINALIZADO',
            'valor' => $valor,
        ]);
    }

}