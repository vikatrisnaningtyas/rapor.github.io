<div class="form-group">
    {!! Form::label('nama_mapel', 'Mata Pelajaran', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('nama_mapel', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama_mapel', '<p class="parsley-required">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('kelompok', 'Kelompok', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::select('kelompok', ['A' => 'Kelompok A', 'B' => 'Kelompok B'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('kelompok', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
        {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Cancel', ['class' => 'btn btn-default']) !!}
    </div>
</div>