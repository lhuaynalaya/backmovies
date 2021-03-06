<?php namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class StoreContacto extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'nombre' => array(
          'required',
          'max:200',
          'regex:/^[a-zA-ZáéíóúÁÉÍÓÚ0-9_. ]*$/'
        ),
        'celular' => array(
          'required',
          'max:20',
           'regex:/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/'
        ),
        'correo_electronico' => array(
          'required',
          'max:20',
          'regex:/^((([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,})))*$/'
        )
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
          'nombre.required' => 'El campo es obligatorio.',
          'nombre.max' => 'El campo debe de tener un máximo de 200 caracteres.',
          'nombre.regex' => 'El campo solo permite caracteres alfanúmericos.',
          'celular.required' => 'El campo es obligatorio.',
          'celular.max' => 'El campo debe de tener un máximo de 20 caracteres.',
          'celular.regex' => 'El campo solo permite caracteres númerico.',
          'correo_electronico.required' => 'El campo es obligatorio.',
          'correo_electronico.max' => 'El campo debe de tener un máximo de 200 caracteres.',
          'correo_electronico.regex' => 'El valor de este campo no es válido.'
        ];
    }

    /**
     * @param Validator $validator
     * @return mixed
     */
    public function formatErrors(Validator $validator)
    {
        return $validator->errors()->all();
    }

    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
