<?php

namespace App\Http\Requests;

use App\Models\Quote;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

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
    public function rules(?Quote $quote = null, Request $request)
    {
        // dd('sddas');
        $quote ??= new Quote();

        $rules = [
            'name' => ['required'],
            'thumbnail'      => $quote->exists() ? ['mimes:jpeg,png,jpg,gif,svg'] : ['required', 'mimes:jpeg,png,jpg,gif,svg'],
            'movie_id'  =>   []
        ];
        // dd($request);

        foreach (config('app.available_locales') as $locale) {
            $rules['name.' .$locale ] = 'string';
        }
        // ddd($rules);
        return $rules;
    }
}
