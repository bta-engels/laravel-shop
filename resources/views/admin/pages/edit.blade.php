@extends('layouts.main')

@section('title', __('Edit Pages'))
@section('header', __('Edit Pages'))
@section('links')
    <nav>
        <ul>
            <li><a href="{{ route('admin.pages.index') }}">{{ __('Back to Pages') }}</a></li>
            <li><a href="{{ route('admin.pages.create') }}">{{ __('New Entry') }}</a></li>
        </ul>
    </nav>
@endsection

@section('content')
    <div class="right">
        <x-form action="{{ route('admin.pages.update', $page) }}">
            @method('put')
            @bind($page)
            <x-form-input name="title" label="Title" />
            <x-form-textarea name="body" placeholder="Beschreibung" />
            @endbind

            <x-form-submit />
        </x-form>
    </div>
@endsection
