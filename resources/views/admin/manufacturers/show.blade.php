
@extends('layouts.main')

@section('title', __('Product'))
@section('header', $product->name)

@section('content')
    <div>
        Hersteller <p>{{$product->manufacturer->name}}</p>
        <p>{{$product->description}}</p>
    </div>
@endsection
