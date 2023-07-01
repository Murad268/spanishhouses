<?php

namespace App\Http\Requests\instaPhotos;

use Illuminate\Foundation\Http\FormRequest;

class createRequest extends FormRequest
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
            'link' => ['required'],
            'photo' => ['required', "image", "mimes:jpg,png,webp,svg"]
        ];
    }
}
