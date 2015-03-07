<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreContactRequest extends Request {


	public function authorize()
	{
		return True;
	}


	public function rules()
	{
		return [
          'subject'=>['required','min:2'],
          'name' => ['required', 'min:3'],
          'email' => ['required'],

		];
	}

}
