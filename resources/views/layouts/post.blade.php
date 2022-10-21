@extends('layouts.frontend')

@section('content')
     <h1>posts</h1>
     @foreach ($products as $row)
     {{$row->name}}
     {{$row->description}}

@endsection