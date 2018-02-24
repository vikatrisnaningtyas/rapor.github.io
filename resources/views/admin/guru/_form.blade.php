@if (!isset($model))
    <div class="form-group">
        {!! Form::label('username', 'Username', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-7">
            {!! Form::text('username', null, ['class' => 'form-control']) !!}
            {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-7">
            {!! Form::text('password', null, ['class' => 'form-control']) !!}
            {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

@endif

<div class="form-group">
    {!! Form::label('nip', 'NIP', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('nip', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nip', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('nama_guru', 'Nama Guru', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('nama_guru', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama_guru', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('mapel', 'Mengajar Mapel', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::select('mapel_id', App\Models\Mapel::all('nama_mapel', 'id')->keyBy('id')->map(function ($m) {
            return $m->nama_mapel;
        })->toArray(), null, ['class' => 'form-control select2']) !!}
        {!! $errors->first('mapel_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>



<div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
        {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Cancel', ['class' => 'btn btn-default']) !!}
    </div>
</div>