@extends('layouts.app')

@section('title')
    sample website laravel 5.4
    @endsection

@section('header')
    <h1>Home</h1>
    @endsection
@section('sidebar')
    @parent
    <p>This is from home page</p>
    @endsection


