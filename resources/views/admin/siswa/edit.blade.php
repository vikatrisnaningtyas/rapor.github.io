@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <!-- <h4 class="header-title m-t-0 m-b-30">Horizontal Form</h4> -->

                    {!! Form::model($siswa, ['route' => ['siswa.update', $siswa], 'method' => 'patch', 'class' => 'form-horizontal']) !!}
                    @include('admin.siswa._form', ['model' => $siswa])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection