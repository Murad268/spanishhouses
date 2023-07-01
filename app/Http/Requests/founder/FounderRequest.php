<?php

namespace App\Http\Requests\founder;

use Illuminate\Foundation\Http\FormRequest;

class FounderRequest extends FormRequest
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
            'founder_name' => ['required'],
            'founder_position' => ['required'],
            'founder_desc' => ['required'],
            'founder_languages' => ['required'],
            'founder_photo' => ['required', "image", "mimes:jpg,png,webp,svg"]
        ];
    }
}
