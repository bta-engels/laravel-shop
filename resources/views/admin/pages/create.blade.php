@extends('layouts.main')

@section('title', __('Edit Pages'))
@section('header', __('Edit Pages'))
@section('links')
    <nav>
        <ul>
            <li><a href="{{ route('admin.pages.index') }}">{{ __('Back to Pages') }}</a></li>
        </ul>
    </nav>
@endsection
@section('content')
    <div class="right">
        <x-form method="post" action="{{ route('admin.pages.store') }}" enctype="multipart/form-data">
            <x-form-input name="title" label="Title" />
            <x-form-textarea name="body" placeholder="Beschreibung" />
            <x-form-submit />
        </x-form>
    </div>
@endsection
