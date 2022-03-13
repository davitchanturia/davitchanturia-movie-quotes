<?php

namespace App\Http\Requests\ApiRequests;

use Illuminate\Foundation\Http\FormRequest;

class EditQuoteRequest extends FormRequest
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
			'englishName'   => 'required',
			'georgianName'  => 'required',
			'relevantMovie' => 'required',
			'thumbnail'     => 'required|mimes:jpeg,png,jpg,gif,svg',
			'id'            => 'required',
		];

		return $rules;
	}
}
