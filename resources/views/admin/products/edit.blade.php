@extends('layouts.main')

@section('title', __('Edit Product'))
@section('header', __('Edit Product'))

@section('content')
    <div class="right">
        <x-form action="{{ route('admin.products.update', $product) }}">
            @method('put')
            @bind($product)
                <x-form-select name="category_id" :options="$categories" label="Categories" />
                <x-form-select name="manufacturer_id" :options="$manufacturers" label="Manufacturer" />
                <x-form-input name="name" label="Name" />
                <x-form-textarea name="description" placeholder="Beschreibung" />
            @endbind
            <x-form-submit />
        </x-form>
    </div>
@endsection
