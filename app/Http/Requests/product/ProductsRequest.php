<?php

namespace App\Http\Requests\product;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
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
            'products_title' => ['required'],
            'artikul' => ['required'],
            'products_price' => ['required', 'numeric'],
            'bedrooms' => ['required'],
            'bathrooms' => ['required'],
            'square' => ['required'],
            'plot' => ['required'],
            'products_building_type' => ['required'],
            'products_district' => ['required']
        ];
    }
}
