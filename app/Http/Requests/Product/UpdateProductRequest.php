<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'thumbnail' => ['nullable', 'image'],
            'name' => ['required', 'string', 'max:255'],
            'detail' => ['required', 'string', 'max:255'],
            'prize' => ['required', 'numeric'],
            'discount' => ['required', 'numeric'],
            'total_quantity' => ['required', 'numeric'],
            'category_id' => ['nullable', Rule::exists('categories', 'id')],
            'files' => ['nullable', 'array'],
            'files.*' => ['nullable', 'mimes:jpg,png,pdf'],
            'size' => ['required', 'string'],
            'color' => ['required', 'string'],

        ];
    }
}
