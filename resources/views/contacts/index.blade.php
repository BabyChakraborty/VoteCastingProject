@extends('layouts.contactus')
@section('content')
    <h2>Contact Us</h2>

    @if ( !$contacts->count() )
        You have no contact us
    @else
        <ul>
            @foreach( $contacts as $contact )
                <li>
                 {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('contacts.destroy', $contact->subject))) !!}
                        <a href="{{ route('contacts.show', $contact->subject) }}">{{ $contact->subject }}</a>
                        (
                            {!! link_to_route('contacts.edit', 'Edit', array($contact->subject), array('class' => 'btn btn-info')) !!},
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}

                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('contacts.create', 'Create Project') !!}
    </p>
@endsection