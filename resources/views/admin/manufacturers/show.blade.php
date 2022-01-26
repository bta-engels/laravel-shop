
@extends('layouts.main')

@section('title', __('Manufacturer'))
@section('header', $manufacturer->name)

@section('content')
    <div>
        Hersteller <p>{{$manufacturer->name}}</p>
        <p>{{$manufacturer>description}}</p>
    </div>
@endsection
