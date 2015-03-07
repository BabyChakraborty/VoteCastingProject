@extends('app')

@section('content')
    <h2>{{ $voter->voter_name }}</h2>
    <h2>{{ $voter->voter_id }}</h2>



    <p>
        {!! link_to_route('voters.index', 'Back to create vote') !!} |

    </p>