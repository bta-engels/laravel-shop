
@extends('layouts.main')

@section('title', __('Product'))
@section('header', $product->name)

@section('content')
    <div>
        <h3 class="font-bold mx-2">Hersteller: {{$product->manufacturer->name}}</h3>
        <p>{!! nl2br($product->description) !!}</p>
    </div>
@endsection
