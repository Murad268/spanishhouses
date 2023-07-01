<?php

namespace App\Http\Requests\productImages;

use Illuminate\Foundation\Http\FormRequest;

class productImagesRequest extends FormRequest
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
            'product_image[]' => ['required', "image", "mimes:jpg,png,webp,svg"]
        ];
    }
}
