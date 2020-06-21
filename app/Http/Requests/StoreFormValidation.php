<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormValidation extends FormRequest
{
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
            'name'=>'required|min:3|max:40',
            'surname'=>'required|min:3|max:40'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Podaj imię',
            'surname.required'  => 'Podaj nazwisko',
            'name.min' => 'Minimalna ilość znaków przy imieniu to 3',
            'surname.min'  => 'Minimalna ilość znaków przy nazwisku to 3',
            'name.max' => 'Maksymalna ilość znaków przy imieniu to 40',
            'surname.max'  => 'Maksymalna ilość znaków przy nazwisku to 40',
        ];
    }
}
