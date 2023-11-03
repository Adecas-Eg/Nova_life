<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCasa extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:50|min:2',
            'tipo_oferta' =>'required|max:15',
            'tipo_inmueble' => 'required|max:15',
            'estrato' => 'required|max:7',
            'direccion' => 'required|min:1',
            'departamento' => 'required|max:20|min:3',
            'ciudad' => 'required|max:300',
            'descripcion' => 'required|max:255',
            'baños' => 'required|max:5|min:1',
            'parqueaderos' => 'required|max:5|',
            'pisos' => 'required|max:100|min:1',
            'precio'=>'required|min:1|',
            'area' => 'required|max:50',
            'antiguedad' => 'required|max:25',
            'url_3d' => 'required'
        ];
    }
}
