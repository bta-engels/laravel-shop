@extends('layouts.main')

@section('title', __('Edit Product'))
@section('header', __('Edit Product'))

@section('content')
    <div class="right">
        <x-form methode='post' action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
            <x-form-select name="category_id" label="Kategorie" :options="$categories" />
            <x-form-select name="manufacturer_id" label="Hersteller" :options="$manufacturers" />
            <x-form-input name="name" label="Name" />
            <x-form-textarea name="description" placeholder="Beschreibung" />
            <x-form-input type="file" name="image" label="Image" />
            <x-form-submit />
        </x-form>
    </div>
@endsection
