@extends('layouts.app')

@section('title')
    sample website | about
    @endsection

@section('content')
    <h1>About</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor explicabo magni modi nemo omnis quisquam quos. Assumenda cumque distinctio, earum, explicabo iste magnam molestias nulla quod rem soluta tenetur ut. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet assumenda cupiditate eaque, eos esse excepturi facilis impedit inventore magni, natus non perferendis provident recusandae repellat rerum ullam! Beatae, consequuntur.</p>
    @endsection
@section('sidebar')
    @parent
    <p>This is from about page</p>
    @endsection


