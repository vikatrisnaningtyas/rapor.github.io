<div class="form-group">
    {!! Form::label('nama_ekskul', 'Ekstrakurikuler', ['class'=> 'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('nama_ekskul', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama_ekskul', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
        {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Cancel', ['class' => 'btn btn-default']) !!}
    </div>
</div>