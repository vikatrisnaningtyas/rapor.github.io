<div class="form-group">
    {!! Form::label('kelas', 'Kelas', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('kelas_id', $kelas->nama_kelas, ['class' => 'form-control', 'readonly' => '']) !!}
        {!! $errors->first('kelas_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('siswa', 'Siswa', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::select('nis[]', App\Models\Siswa::doesntHave('kelas')->get(['nis', 'nama_siswa'])->keyBy('nis')->map(function ($s) {
            return $s->nis . " " . $s->nama_siswa;
        })->toArray(), null, ['class' => 'multi-select', 'multiple' => '', 'id' => 'my_multi_select3']) !!}
        {!! $errors->first('nis', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
        {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Cancel', ['class' => 'btn btn-default']) !!}
    </div>
</div>
