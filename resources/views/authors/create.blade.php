@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="{{ url('/home') }}">Dashboard</a></li>&nbsp;|&nbsp;
                <li><a href="{{ url('/admin/authors') }}">Penulis</a></li>&nbsp;|&nbsp;
                <li class="active">Tambah Penulis</li>
            </ul>
            <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">Tambah Penulis</h2>
            </div>
            <div class="panel-body">
                {!! Form::open(['url' => route('authors.store'), 'method' => 'post', 'class'=>'form-horizontal']) !!}
                @include('authors._form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
