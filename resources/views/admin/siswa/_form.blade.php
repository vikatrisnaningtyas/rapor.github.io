<div class="form-group">
    {!! Form::label('nama_siswa', 'Nama Lengkap', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('nama_siswa', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama_siswa', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('nisn', 'NISN', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('nisn', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nisn', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('tempat_lahir', 'Tempat Lahir', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('tempat_lahir', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tempat_lahir', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('tgl_lahir', 'Tanggal Lahir', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('tgl_lahir', null, ['class' => 'form-control', 'data-mask' => '99-99-9999']) !!}
        {!! $errors->first('tgl_lahir', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('jenis_kelamin', 'Jenis Kelamin', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        <div class="radio radio-inline">
            {!! Form::radio('jenis_kelamin', 'L', true) !!}
            {!! Form::label('jenis_kelamin', 'LAKI-LAKI') !!}
        </div>
        <div class="radio radio-inline">
            {!! Form::radio('jenis_kelamin', 'P') !!}
            {!! Form::label('jenis_kelamin', 'PEREMPUAN') !!}
        </div>
        {!! $errors->first('jenis kelamin', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('agama', 'Agama', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::select('agama', ['ISLAM' => 'ISLAM',
                                   'KATOLIK' => 'KATOLIK',
                                   'PROTESTAN' => 'PROTESTAN',
                                   'BUDDHA' => 'BUDDHA',
                                   'HINDU' => 'HINDU',
                                   'KONGHUCU' => 'KONG HU CU'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('agama', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('status_anak', 'Status dalam Keluarga', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('status_anak', null, ['class' => 'form-control']) !!}
        {!! $errors->first('status_anak', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('anak_ke', 'Anak ke-', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::number('anak_ke', 1, ['class' => 'form-control']) !!}
        {!! $errors->first('anak_ke', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('alamat_siswa', 'Alamat Siswa', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::textarea('alamat_siswa', null, ['class' => 'form-control']) !!}
        {!! $errors->first('alamat_siswa', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('telp', 'Telepon Siswa', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('telp', null, ['class' => 'form-control']) !!}
        {!! $errors->first('telp', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('asal_sekolah', 'Sekolah Asal', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('asal_sekolah', null, ['class' => 'form-control']) !!}
        {!! $errors->first('asal_sekolah', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('nama_ayah', 'Nama Ayah', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('nama_ayah', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama_ayah', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('nama_ibu', 'Nama Ibu', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('nama_ibu', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama_ibu', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('alamat_ortu', 'Alamat Ortu', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::textarea('alamat_ortu', null, ['class' => 'form-control']) !!}
        {!! $errors->first('alamat_ortu', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('telp_ortu', 'Telepon Orang Tua', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('telp_ortu', null, ['class' => 'form-control']) !!}
        {!! $errors->first('telp_ortu', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('pekerjaan_ayah', 'Pekerjaan Ayah', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('pekerjaan_ayah', null, ['class' => 'form-control']) !!}
        {!! $errors->first('pekerjaan_ayah', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('pekerjaan_ibu', 'Pekerjaan Ibu', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('pekerjaan_ibu', null, ['class' => 'form-control']) !!}
        {!! $errors->first('pekerjaan_ibu', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('nama_wali', 'Nama Wali', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('nama_wali', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama_wali', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('alamat_wali', 'Alamat Wali', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::textarea('alamat_wali', null, ['class' => 'form-control']) !!}
        {!! $errors->first('alamat_wali', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('telp_wali', 'Telepon Wali', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('telp_wali', null, ['class' => 'form-control']) !!}
        {!! $errors->first('telp_wali', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('pekerjaan_wali', 'Pekerjaan Wali', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('pekerjaan_wali', null, ['class' => 'form-control']) !!}
        {!! $errors->first('pekerjaan_wali', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('tgl_diterima', 'Tanggal Diterima', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        {!! Form::text('tgl_diterima', null, ['class' => 'form-control', 'data-mask' => '99-99-9999']) !!}
        {!! $errors->first('tgl_diterima', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('pengesahan', 'Pengesahan Rapor', ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
        <div class="radio radio-inline">
            {!! Form::radio('pengesahan', 'AYAH', true) !!}
            {!! Form::label('pengesahan', 'AYAH') !!}
        </div>
        <div class="radio radio-inline">
            {!! Form::radio('pengesahan', 'IBU') !!}
            {!! Form::label('pengesahan', 'IBU') !!}
        </div>
        <div class="radio radio-inline">
            {!! Form::radio('pengesahan', 'WALI') !!}
            {!! Form::label('pengesahan', 'WALI') !!}
        </div>
        {!! $errors->first('pengesahan', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
        {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Cancel', ['class' => 'btn btn-default']) !!}
    </div>
</div>