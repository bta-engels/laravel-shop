@extends('layouts.main')

@section('title', __('Edit Product'))
@section('header', __('Edit Product'))
@section('links')
    <nav>
        <ul>
            <li><a href="{{ route('admin.products.index') }}">{{ __('Back to Products') }}</a></li>
        </ul>
    </nav>
@endsection

@section('content')
    <div class="right">
        <x-form methode='post' action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
            <x-form-select name="category_id" label="Kategorie" :options="$categories" />
            <x-form-select name="manufacturer_id" label="Hersteller" :options="$manufacturers" />
            <x-form-input name="name" label="Name" />
            <x-form-textarea name="description" placeholder="Beschreibung" />
            <label for="avatar">Choose a product picture:</label>
            <input type="file" class="block my-2"
                   id="image" name="image"
                   accept="image/png, image/jpeg">

            <x-form-submit />
        </x-form>
    </div>
@endsection
