@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-default">go back</a>
    <h1>{{$todo->text}}</h1>
    <p>{{$todo->body}}</p>
@endsection