@extends('layouts.main')

@section('title', __('Edit Product'))
@section('header', __('Edit Product'))

@section('content')
    <div class="right">
        <x-form method="post" action="{{ route('admin.products.store') }}">
            <x-form-select name="category_id" label="Kategorie" :options="$categories" />
            <x-form-select name="manufacturer_id" label="Hersteller" :options="$manufacturers" />
            <x-form-input name="name" label="Name" />
            <x-form-textarea name="description" placeholder="Beschreibung" />
            <x-form-submit />
        </x-form>
    </div>
@endsection
