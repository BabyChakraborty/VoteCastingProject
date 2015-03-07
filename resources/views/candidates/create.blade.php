@extends('app')

@section('content')
    <h2>Create candidates voting list</h2>

    {!! Form::model(new App\Candidate,  ['route' => ['candidates.store']]) !!}
        @include('candidates/partials/_form', ['submit_text' => 'Create candidates voter entry'])
    {!! Form::close() !!}
@endsection
