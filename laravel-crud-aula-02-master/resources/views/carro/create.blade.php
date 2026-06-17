@extends('template/main',
    [
        'titulo' => "Sistema Aula",
        'cabecalho' => 'Novo Carro',
        'rota' => '',
    ]
)

@section('conteudo')
<form action="{{ route('carro.store') }}" method="POST">
    @csrf

    
    <div class="row">
        <div class="col">
            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control @error('placa') is-invalid @enderror"
                    name="placa"
                    placeholder="Placa"
                    value="{{ old('placa') }}"
                />
                <label for="placa">Placa</label>

                @if($errors->has('placa'))
                    <div class="invalid-feedback">
                        {{ $errors->first('placa') }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control @error('modelo') is-invalid @enderror"
                    name="modelo"
                    placeholder="modelo"
                    value="{{ old('modelo') }}"
                />
                <label for="modelo">Modelo</label>

                @if($errors->has('modelo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('modelo') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control @error('marca') is-invalid @enderror"
                    name="marca"
                    placeholder="marca"
                    value="{{ old('marca') }}"
                />
                <label for="marca">Marca</label>

                @if($errors->has('marca'))
                    <div class="invalid-feedback">
                        {{ $errors->first('marca') }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control @error('cor') is-invalid @enderror"
                    name="cor"
                    placeholder="cor"
                    value="{{ old('cor') }}"
                />
                <label for="cor">Cor</label>

                @if($errors->has('cor'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cor') }}
                    </div>
                @endif
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col">
            <div class="input-group mb-3">
                <span class="input-group-text bg-secondary text-white">Cliente</span>

                <select
                    name="cliente_id"
                    class="form-select form-control @error('cliente_id') is-invalid @enderror"
                >
                    @foreach ($clientes as $item)
                        <option value="{{ $item->id }}"
                            @if($item->id == old('cliente_id')) selected="true" @endif
                        >
                            {{ $item->nome }}
                        </option>
                    @endforeach
                </select>

                @if($errors->has('cliente_id'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cliente_id') }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Botões -->
    <div class="row mb-5">
        <div class="col">

            <a href="{{ route('aluno.index') }}" class="btn btn-secondary">
                Voltar
            </a>

            <button type="submit" class="btn btn-success">
                Confirmar
            </button>

        </div>
    </div>

</form>
@endsection