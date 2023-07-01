<?php

namespace App\Http\Requests\contact;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'russian_number' => ['required', 'min:12', 'max:15'],
            'spanish_number' => ['required', 'min:12', 'max:15'],
            'whatsapp_number' => ['required', 'min:12', 'max:15'],
            'instagram_link' => ['required'],
            'facebook_link' => ['required'],
        ];
    }
}
