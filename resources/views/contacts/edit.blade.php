
@extends('layouts.contactus')

@section('content')

                                                  <h2>Edit Contact</h2>

                                                  {!! Form::model($contact, ['method' => 'PATCH', 'route' => ['contacts.update', $contact->subject]]) !!}
                                                      @include('contacts/partials/_form', ['submit_text' => 'Edit Contact'])
                                                  {!! Form::close() !!}
                                              @endsection