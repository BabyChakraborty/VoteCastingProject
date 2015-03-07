<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactRequest extends Request {


	public function authorize()
	{
		return false;
	}

	public function rules()
	{
		return [
			//
		];
	}

}
