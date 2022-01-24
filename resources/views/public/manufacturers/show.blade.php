
@extends('layouts.main')

@section('title', __('Manufacturer'))
@section('header', $manufacturer->name)

@section('content')
    <div>
        
        <p>{{$manufacturer->description}}</p>
    </div>
@endsection

