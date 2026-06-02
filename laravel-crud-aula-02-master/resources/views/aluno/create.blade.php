@extends('template/main',
    [
        'titulo' => "Sistema Aula",
        'cabecalho' => 'Novo Aluno',
        'rota' => '',
    ]
)

@section('conteudo')
<form action="{{ route('aluno.store') }}" method="POST">
    @csrf

    <!-- Nome -->
    <div class="row">
        <div class="col">
            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control @error('nome') is-invalid @enderror"
                    name="nome"
                    placeholder="Nome"
                    value="{{ old('nome') }}"
                />
                <label for="nome">Nome</label>

                @if($errors->has('nome'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nome') }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Turma -->
    <div class="row">
        <div class="col">
            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control @error('turma') is-invalid @enderror"
                    name="turma"
                    placeholder="Turma"
                    value="{{ old('turma') }}"
                />
                <label for="turma">Turma</label>

                @if($errors->has('turma'))
                    <div class="invalid-feedback">
                        {{ $errors->first('turma') }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Curso -->
    <div class="row">
        <div class="col">
            <div class="input-group mb-3">
                <span class="input-group-text bg-secondary text-white">Curso</span>

                <select
                    name="curso_id"
                    class="form-select form-control @error('curso_id') is-invalid @enderror"
                >
                    @foreach ($cursos as $item)
                        <option value="{{ $item->id }}"
                            @if($item->id == old('curso_id')) selected="true" @endif
                        >
                            {{ $item->nome }}
                        </option>
                    @endforeach
                </select>

                @if($errors->has('curso_id'))
                    <div class="invalid-feedback">
                        {{ $errors->first('curso_id') }}
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