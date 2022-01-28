@extends('layouts.main')

@section('title', __('Edit Category'))
@section('header', __('Edit Category'))
@section('links')
    <nav>
        <ul>
            <li><a href="{{ route('admin.manufacturers.index') }}">{{ __('Back to Manufacturers') }}</a></li>
        </ul>
    </nav>
@endsection
@section('content')
    <div class="right">
        <x-form method="post" action="{{ route('admin.manufacturers.store') }}">
            <x-form-input name="name" label="Name" />
            <x-form-textarea name="description" placeholder="Beschreibung" />
            <x-form-submit />
        </x-form>
    </div>
@endsection
