<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|max:125|min:2',
            'author' => 'required|max:125|min:2',
            'year' => 'required|max:9999|min:1000|numeric',
            'image' => 'max:5000|image',
            'name' => 'max:125|min:3|unique:name,'
        ];
    }
}
