@extends('app')

@section('content')
    <h2>Create Voter list</h2>

    {!! Form::model(new App\Voter, ['route' => ['voters.store']]) !!}
        @include('voters/partials/_form', ['submit_text' => 'Create voter entry'])
    {!! Form::close() !!}
@endsection
