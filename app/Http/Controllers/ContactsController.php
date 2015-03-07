<?php namespace App\Http\Controllers;
use Input;
use Redirect;
use App\Contact;

use App\Http\Requests;
use App\Http\Requests\StoreContactRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ContactsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('contacts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(StoreContactRequest $request )
	{
        $input = Input::all();
        Contact::create( $input );

        return Redirect::route('contacts.index')->with('message', 'Contact created');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Contact $contact)
	{
        return view('contacts.show', compact('contact'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Contact $contact)

        {
        return view('contacts.edit', compact('contact'));
    }


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Contact $contact)
	{
        $input = array_except(Input::all(), '_method');
        $contact->update($input);

        return Redirect::route('contacts.show', $contact->subject)->with('message', 'Contact updated.');
    }



	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return Redirect::route('contacts.index')->with('message', 'Contact deleted.');
    }


}
