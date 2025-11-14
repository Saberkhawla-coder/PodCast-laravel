<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRequestPodcast extends FormRequest
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
            'title' => 'required|string|min:3|max:100',
            'description' => 'nullable|string|max:2000',
            'image_path' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'genre' => 'nullable|string|max:50',
            'is_published' => 'boolean',

        ];
    }
    // public function messages(): array
    // {
    //     return [
            
    //         'title.required' => "Le titre du podcast est obligatoire.",
    //         'title.min' => "Le titre doit contenir au moins 3 caractères.",
    //         'image_path.image' => "Le fichier doit être une image.",
    //         'image_path.max' => "L'image ne doit pas dépasser 2 Mo.",
    //     ];
    // }
}
