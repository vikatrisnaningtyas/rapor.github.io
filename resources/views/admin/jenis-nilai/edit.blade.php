@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <!-- <h4 class="header-title m-t-0 m-b-30">Horizontal Form</h4> -->

                    {!! Form::model($jenis, ['route' => ['jenis-nilai.update', $jenis], 'method' => 'patch', 'class' => 'form-horizontal']) !!}
                    @include('admin.jenis-nilai._form', ['model' => $jenis])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection