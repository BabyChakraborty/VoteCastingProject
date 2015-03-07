<div class="form-group">
    {!! Form::label('subject', 'Subject:') !!}
    {!! Form::text('subject') !!}
</div>
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name') !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email') !!}
</div>
<div class="form-group">
    {!! Form::label('feedback', 'Feedback:') !!}
    {!! Form::textarea('Feedback') !!}
</div>

<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>
