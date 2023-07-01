<?php

namespace App\Http\Requests\about;

use Illuminate\Foundation\Http\FormRequest;

class aboutRequest extends FormRequest
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
            'about_title' => ['required', "max:255"],
            'about_desc' => ['required'],
            'about_footer' => ['required', "max:255"],
            'about_photo' => ['required', "image", "mimes:jpg,png,webp,svg"]
        ];
    }
}
