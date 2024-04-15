<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCountryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'], // Nazwa kraju jest wymagana, maksymalna długość 255 znaków
            'code' => ['required', 'string', 'max:10'], // Kod kraju jest wymagany, maksymalna długość 10 znaków
            'currency' => ['required', 'string', 'max:50'], // Waluta jest wymagana, maksymalna długość 50 znaków
            'area' => ['required', 'numeric', 'min:0'], // Powierzchnia jest wymagana, musi być liczbą nieujemną
            'language' => ['required', 'string', 'max:100'], // Język jest wymagany, maksymalna długość 100 znaków
        ];
    }
}
