@extends('layouts.app')

@section('title')
    sample website laravel 5.4
@endsection

@section('content')
    <h1>Messages</h1>

    @if(count($messages) > 0)
        @foreach($messages as $msg)
            <ul class="list-group">
                <li class="list-group-item">Name: {{ $msg->name }}</li>
                <li class="list-group-item">Email: {{ $msg->email }}</li>
                <li class="list-group-item">Message: {{ $msg->message }}</li>
            </ul>
        @endforeach
    @endif
@endsection
@section('sidebar')
    @parent
    <p>This is from home page</p>
@endsection


