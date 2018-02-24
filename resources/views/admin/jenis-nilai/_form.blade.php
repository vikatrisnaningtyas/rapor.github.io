<div class="form-group">
    {!! Form::label('jenis_nilai','Jenis Nilai', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('jenis_nilai', null, ['class' => 'form-control']) !!}
        {!! $errors->first('jenis_nilai', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('ket','Keterangan', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('ket', null, ['class' => 'form-control']) !!}
        {!! $errors->first('Keterangan', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('aspek', 'Aspek Penilaian', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        <div class="radio">
            {!! Form::radio('aspek', 'SIKAP', true) !!}
            {!! Form::label('aspek', 'SIKAP SPIRITUAL DAN SOSIAL') !!}
        </div>
        <div class="radio">
            {!! Form::radio('aspek', 'PENGETAHUAN') !!}
            {!! Form::label('aspek', 'PENGETAHUAN') !!}
        </div>
        <div class="radio">
            {!! Form::radio('aspek', 'KETERAMPILAN') !!}
            {!! Form::label('aspek', 'KETERAMPILAN') !!}
        </div>
        {!! $errors->first('aspek', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
        {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Cancel', ['class' => 'btn btn-default']) !!}
    </div>
</div>

