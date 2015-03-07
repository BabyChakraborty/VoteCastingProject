@extends('layouts.contactus')


@section('content')
    <h2>
        {!! link_to_route('contacts.show', $contact->subject) !!}

    </h2>
    <br>
   <div class="form-group">
       {!! Form::label('name', 'Name:') !!}
       {!! Form::text('name',$contact->name ) !!}

   </div>
</br>
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email',$contact->email ) !!}

</div>
</br>
    <div class="form-group">
        {!! Form::label('feedback', 'Feedback:') !!}
        {!! Form::textarea('Feedback',$contact->feedback) !!}

    </div>

    </br>
     <br>
     <p>
             {!! link_to_route('contacts.index', 'Back to Contacts') !!} |

         </p>

    </br>
    </br>
@endsection

