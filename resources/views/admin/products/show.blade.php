
@extends('layouts.main')

@section('title', __('Product'))
@section('header', $product->name)

@section('content')
    <div>
        <h3 class="font-bold mx-2">Hersteller: {{$product->manufacturer->name}}</h3>
        <p>{!! $product->description !!}</p>
    </div>
    <a href="{{ route('admin.products.index') }}" style="color:DodgerBlue;  font-weight: bold;">Zurück zu Products</a>

@endsection
