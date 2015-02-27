<?php namespace HourManager\Http\Requests;

use HourManager\Http\Requests\Request;

class CreateHourRequest extends Request {

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
			'date' => 'required|date_format:d/m/Y',
            'time' => 'required|date_format:H:i'
		];
	}

}
