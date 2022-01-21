@extends('layouts.main')

@section('title', __('Products'))
@section('header', $product->name )

@section('content')
<div>
    <p>{{ $product->description }}</p>
</div>
@endsection
