<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class UpdateTripRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'continent' => 'required|string|max:255',
            'country_id' => 'required|exists:countries,id',
            'period' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ];
    }
}
