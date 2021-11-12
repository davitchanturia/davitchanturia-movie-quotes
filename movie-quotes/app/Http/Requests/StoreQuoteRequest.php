<?php

namespace App\Http\Requests;

use App\Models\Movie;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreQuoteRequest extends FormRequest
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
        $rules = [
            'name' => ['required'],
            // 'name' => ['required'],
            'thumbnail'      => ['required', 'image'],
            'movie_id'  => ['required', Rule::exists('movies', 'id')]
        ];

        
        foreach (config('app.available_locales') as $locale) {
            $rules['name.' .$locale ] = 'string';
        }
        
        return $rules;

        // dd($rules);
    }
}
