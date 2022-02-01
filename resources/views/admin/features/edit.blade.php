@extends('layouts.main')

@section('title', __('Edit Feature'))
@section('header', __('Edit Feature'))
@section('links')
    <nav>
        <ul>
            <li><a href="{{ route('admin.features.index') }}">{{ __('Back to Features') }}</a></li>
            <li><a href="{{ route('admin.features.create') }}">{{ __('New Entry') }}</a></li>
        </ul>
    </nav>
@endsection

@section('content')
    <div class="right">
        <x-form action="{{ route('admin.features.update', $feature) }}">
            @method('put')
            @bind($feature)
            <x-form-input name="title" label="Title" />
            <x-form-textarea name="body" placeholder="Beschreibung" />
            @endbind

            <x-form-submit />
        </x-form>
    </div>
@endsection
