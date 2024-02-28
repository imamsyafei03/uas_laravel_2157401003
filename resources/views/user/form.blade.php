<div class="form-group">
    {!! Form::label('name','Name')!!}
    {!! Form::text('name', null, ['class'=>'form-control'])!!}

</div>
<div class="form-group">
    {!! Form::label('email','Email')!!}
    {!! Form::text('email', null, ['class'=>'form-control'])!!}

</div>

<div class="form-group">
    {!! Form::label('password','Password')!!}
    {!! Form::password('password', ['class'=>'form-control'])!!}

</div>

<div class="form-group">
    {!! Form::label('role','Role')!!}
    {!! Form::select('role',$roles, null,  ['class'=>'form-control'])!!}

</div>




{!! Form::submit('Simpan',['class'=>'btn btn-success nt-4'])!!}
