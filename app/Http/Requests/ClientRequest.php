<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ClientRequest extends FormRequest
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
            //
            'nom'=>'required',
            'prenom'=>'required',
            'CIN'=>'required',
            'numero'=>'required',
            'date_naissance'=>'required',
            'lieu_naissance'=>'required',
            'date_CIN'=>'required',
            'lieu_CIN'=>'required',
            'adresse'=>'required',
            'CP'=>'required',
            'Mtt'=>'required',
            'Obs'=>'required',
        ];
    }
}
