<div class="form-group">
    {!! Form::label('tgl_awal', 'Tanggal Awal', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        <div class="input-group">
            {!! Form::text('tgl_awal', null, ['class' => 'form-control', 'id' => 'datepicker-autoclose', 'placeholder' => 'mm/dd/yyyy']) !!}
            <span class="input-group-addon bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('tgl_akhir', 'Tanggal Akhir', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        <div class="input-group">
            {!! Form::text('tgl_akhir', null, ['class' => 'form-control', 'id' => 'datepicker', 'placeholder' => 'mm/dd/yyyy']) !!}
            <span class="input-group-addon bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('thn_akademik','Tahun Akademik', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('thn_akademik', null, ['class' => 'form-control', 'data-mask' => '9999/9999']) !!}
        {!! $errors->first('thn_akademik', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('semester', 'Semester', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        <div class="radio radio-inline">
            {!! Form::radio('semester', '1', true) !!}
            {!! Form::label('semester', 'SEMESTER 1') !!}
        </div>
        <div class="radio radio-inline">
            {!! Form::radio('semester', '2') !!}
            {!! Form::label('semester', 'SEMESTER 2') !!}
        </div>
        {!! $errors->first('semester', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
        {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Cancel', ['class' => 'btn btn-default']) !!}
    </div>
</div>



