<?php

namespace App\Http\Requests\headers;

use Illuminate\Foundation\Http\FormRequest;

class HeadersRequest extends FormRequest
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
            'headers_name' => ['required'],
            'headers_title' => ['required'],
            'header_subtitle' => ['required'],
            'headers_photo' => ['required', "image", "mimes:jpg,png,webp,svg"]
        ];
    }
}
