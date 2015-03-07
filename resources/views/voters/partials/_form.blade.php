<div class="form-group">
    {!! Form::label('voter_name', 'voter_name:') !!}
    {!! Form::text('voter_name') !!}
</div>
<div class="form-group">
    {!! Form::label('voter_id', 'voter_id:') !!}
    {!! Form::text('voter_id') !!}
</div>
<div class="form-group">
    {!! Form::label('voting_status', 'voting_status:') !!}
    {!! Form::checkbox('voting_status') !!}
</div>

<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>
