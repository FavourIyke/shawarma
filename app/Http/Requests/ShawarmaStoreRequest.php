<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShawarmaStoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|string|min:3|max:40',
            'description'=>'required|min:3|max:40',
            'small_shawarma_price'=>'required|numeric',
            'medium_shawarma_price'=>'required|numeric',
            'large_shawarma_price'=>'required|numeric',
            'category'=>'required',
            'image'=>'required|mimes:png,jpeg,jpg'

        ];
    }
}
