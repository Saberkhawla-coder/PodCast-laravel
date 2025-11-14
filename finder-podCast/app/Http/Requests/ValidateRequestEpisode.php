<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRequestEpisode extends FormRequest
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
            'podcast_id' => 'required|exists:podcasts,id',
             'title' => 'required|string|min:3|max:100',
            'description' => 'nullable|string|max:2000',
            'audio_path' => $this->isMethod('post')
                ? 'required|file|mimes:mp3,wav,mpeg,ogg|max:10240'
                : 'nullable|file|mimes:mp3,wav,mpeg,ogg|max:10240',
            'is_published' => 'boolean',
        ];
    }
    public function messages(): array
    {
        return [
            'podcast_id.required' => 'Le podcast associé est obligatoire.',
            'podcast_id.exists' => "Le podcast sélectionné n'existe pas.",
            'title.required' => "Le titre de l'épisode est obligatoire.",
            'title.min' => 'Le titre doit contenir au moins 3 caractères.',
            'audio_path.required' => 'Le fichier audio est obligatoire pour un nouvel épisode.',
            'audio_path.mimes' => 'Le fichier doit être au format mp3, wav, mpeg ou ogg.',
            'audio_path.max' => 'Le fichier audio ne doit pas dépasser 10 Mo.',
        ];
            
    }
}
