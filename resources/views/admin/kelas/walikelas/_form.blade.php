<div class="form-group">
    {!! Form::label('kelas', 'Kelas', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('kelas_id', $kelas->nama_kelas, ['class' => 'form-control', 'readonly' => '']) !!}
        {!! $errors->first('kelas_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('walikelas', 'Wali Kelas', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::select('guru_id', App\Models\Guru::all('nama_guru', 'id')->keyBy('id')->map(function ($g) {
            return $g->nama_guru;
        })->toArray(), null, ['class' => 'form-control select2']) !!}
        {!! $errors->first('guru_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
        {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Cancel', ['class' => 'btn btn-default']) !!}
    </div>
</div>