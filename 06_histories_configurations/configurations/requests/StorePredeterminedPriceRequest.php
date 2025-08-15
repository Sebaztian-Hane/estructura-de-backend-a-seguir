<?php

namespace Modules\HistoriesConfigurations\Configurations\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * Form Request para validar la creación de un precio predeterminado.
 *
 * Valida que el nombre sea único (ignorando eliminados), requerido y de longitud máxima 255.
 * Permite precio numérico opcional y mayor o igual a 0.
 */
class StorePredeterminedPriceRequest extends FormRequest
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
     * Reglas de validación para la creación de precio predeterminado.
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('predetermined_prices', 'name')->whereNull('deleted_at'), // Ignora los eliminados
            ],
            'price' => 'nullable|numeric|min:0',
        ];
    }
    /**
     * Mensajes personalizados para las reglas de validación.
     * @return array
     */
    public function messages()
    {
        return [
            'name.unique' => 'El precio predeterminado ya está registrado.',
        ];
    }
}
