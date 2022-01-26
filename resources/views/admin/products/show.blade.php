
@extends('layouts.main')

@section('title', __('Product'))
@section('header', $product->name)

@section('content')
    <div>
        Hersteller <p>{{$product->manufacturer->name}}</p>
        <p>{{$product->description}}</p>
    </div>
    <a href="{{ route('admin.products.index') }}" style="color:DodgerBlue;  font-weight: bold;">Zurück zu Products</a>

@endsection
