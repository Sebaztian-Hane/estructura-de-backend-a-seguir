<?php

namespace Modules\HistoriesConfigurations\Configurations\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * Form Request para validar la creación de un tipo de pago.
 *
 * Valida que el nombre sea único (ignorando eliminados), requerido y de longitud máxima 255.
 * Permite descripción opcional de hasta 500 caracteres.
 */
class StorePaymentTypeRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado para hacer esta petición.
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Reglas de validación para la creación de tipo de pago.
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('payment_types', 'name')->whereNull('deleted_at'), // Ignora los eliminados
            ],
            'description' => 'nullable|string|max:500',
        ];
    }


    /**
     * Mensajes personalizados para las reglas de validación.
     * @return array
     */
    public function messages()
    {
        return [
            'name.unique' => 'El tipo de pago ya está registrado.',
        ];
    }
}
