<div class="form-group">
    {!! Form::label('nama','Nama')!!}
    {!! Form::text('nama', null, ['class'=>'form-control'])!!}

</div>
<div class="form-group">
    {!! Form::label('Tempat_lahir','tempat_lahir')!!}
    {!! Form::text('tempat_lahir', null, ['class'=>'form-control'])!!}

</div>
<div class="form-group">
    {!! Form::label('Tanggal_lahir','Tanggal_lahir')!!}
    {!! Form::date('tanggal_lahir', null, ['class'=>'form-control'])!!}

</div>

{!! Form::submit('Simpan',['class'=>'btn btn-success nt-4'])!!}
