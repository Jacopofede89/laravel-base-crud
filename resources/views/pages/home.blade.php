@extends('layouts.main-layout')
@section('content')
    <h1>list</h1>
    <ul>
        @foreach ($comics as $comic)
        <li>{{$comic -> title}} - {{$comic -> relese_date}}</li>    
        @endforeach
    </ul>
@endsection