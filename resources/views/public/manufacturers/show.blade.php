
@extends('layouts.main')

@section('title', __('Manufacturer'))
@section('header', $manufacturer->name)

@section('content')
    <div>
        <p>{!! nl2br($product->description) !!}</p>
    </div>
@endsection

