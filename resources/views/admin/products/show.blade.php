
@extends('layouts.main')

@section('title', __('Product'))
@section('header', $product->name)
@section('links')
    <nav>
        <ul>
            <li><a href="{{ route('admin.products.index') }}">{{ __('Back to Productss') }}</a></li>
            <li><a href="{{ route('admin.products.create') }}">{{ __('New Entry') }}</a></li>
        </ul>
    </nav>
@endsection

@section('content')
    <div>
        <h3 class="font-bold mx-2">Hersteller: {{ $product->manufacturer->name }}</h3>
        <p>{!! nl2br($product->description) !!}</p>
    </div>
@endsection
