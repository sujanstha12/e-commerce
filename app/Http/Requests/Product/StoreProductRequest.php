<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'thumbnail' => ['required', 'image'],
            'name' => ['required', 'string', 'max:255'],
            'detail' => ['required', 'string', 'max:255'],
            'prize' => ['required', 'numeric'],
            'discount' => ['required', 'numeric'],
            'total_quantity' => ['required', 'numeric'],
            'category_id' => ['nullable', Rule::exists('categories', 'id')],
            'files' => ['required', 'array'],
            'files.*' => ['required', 'mimes:jpg,png,pdf'],
            'size' => ['required', 'string'],
            'color' => ['required', 'string'],

        ];
    }
}
