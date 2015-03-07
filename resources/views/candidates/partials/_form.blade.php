
<div class="form-group">
    {!! Form::label('candidate_name', 'candidate_name:') !!}
    {!! Form::text('candidate_name') !!}
</div>
<div class="form-group">
    {!! Form::label('candidate_symbol', 'candidate_symbol:') !!}
    {!! Form::text('candidate_symbol') !!}
</div>

<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>