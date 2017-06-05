@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <!-- <h4 class="header-title m-t-0 m-b-30">Horizontal Form</h4> -->

                    {!! Form::open(['route' => 'admin.ekskul.ekskul-guru.store', 'class' => 'form-horizontal']) !!}
                    @include('admin.ekskul.ekskul-guru._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection