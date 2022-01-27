@extends('layouts.main')

@section('title', __('Edit Product'))
@section('header', __('Edit Product'))
@section('links')
    <nav>
        <ul>
            <li><a href="{{ route('admin.products.index') }}">{{ __('Back to Products') }}</a></li>
            <li><a href="{{ route('admin.products.create') }}">{{ __('New Entry') }}</a></li>
        </ul>
    </nav>
@endsection

@section('content')
    <div class="right">
        <x-form action="{{ route('admin.products.update', $product) }}">
            @method('put')
            @bind($product)
            <x-form-select name="category_id" label="Kategorie" :options="$categories" />
            <x-form-select name="manufacturer_id" label="Hersteller" :options="$manufacturers" />
            <x-form-input name="name" label="Name" />
            <x-form-textarea name="description" placeholder="Beschreibung" />
            @endbind

            <x-form-submit />
        </x-form>
    </div>
@endsection
