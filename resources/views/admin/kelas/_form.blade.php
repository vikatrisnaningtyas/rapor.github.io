<div class="form-group">
    {!! Form::label('nama_kelas', 'Kelas', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('nama_kelas', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama_kelas', '<p class="parsley-required">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('grade', 'Grade', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::select('grade', ['1' => '1', '2' => '2', '3' => '3'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('grade', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
        {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Cancel', ['class' => 'btn btn-default']) !!}
    </div>
</div>