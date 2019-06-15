@extends('layouts.app')

@section('title')
    sample website | contact
    @endsection

@section('content')
    <h1>Contact</h1>

    {{ Form::open(array('url' => 'contact/submit')) }}
        <div class="form-group">
            {{ Form::label('name','Name') }}
            {{ Form::text('name','',['class' => 'form-control','placeholder'=>'Your Name']) }}
        </div>
        <div class="form-group">
            {{ Form::label('email','E-mail') }}
            {{ Form::text('email','',['class' => 'form-control','placeholder'=>'example@gmail.com']) }}
        </div>
        <div class="form-group">
            {{ Form::label('message','Message') }}
            {{ Form::textarea('message','',['class' => 'form-control','placeholder'=>'Your Message']) }}
        </div>

    <div class="form-group">
        {{ Form::submit('submit',['class' => 'btn btn-primary']) }}
    </div>
    {{ Form::close() }}
    @endsection
@section('sidebar')
    @parent
    <p>This is from contact page</p>
    @endsection


