<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

class UpdateRequestEpisode extends FormRequest
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
            'title'        => 'sometimes|string|min:3|max:100',
            'description'  => 'sometimes|string|max:2000',
            'audio_path'   => 'sometimes|file|mimes:mp3,wav,ogg|max:10000',
            'is_published' => 'sometimes|boolean',
    ];
    }
    public function messages():array{
        return[
            "title.string"=>'title must be string ',
            "title.min"=>'min is 3 characters',
        ];
    }
}
