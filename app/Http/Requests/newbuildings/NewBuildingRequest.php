<?php

namespace App\Http\Requests\newbuildings;

use Illuminate\Foundation\Http\FormRequest;

class NewBuildingRequest extends FormRequest
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
            'newbuildings_photo' => ['required', "image", "mimes:jpg,png,webp,svg"],
            'newbuildings_title' => ['required']
        ];
    }
}
