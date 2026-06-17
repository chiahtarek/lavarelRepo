<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class CarroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation() {

        $this->merge(
            collect($this->all())->map(function ($value) {
                return is_string($value) ? Str::upper($value) : $value;
            })->toArray()
        );
    }

    public function messages(): array {
        return [
            "required" => "O preenchimento deste campo é obrigatório!",
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
         $id = $this->route('cliente');

        return [
            'placa' => "required",
            'modelo' => "required",
            'marca' => "required",
            'cor' => "required",
            'cliente_id' => "required|exists:clientes,id",
        ];
    }
}
