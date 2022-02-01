@extends('layouts.main')

@section('title', __('Edit Features'))
@section('header', __('Edit Features'))
@section('links')
    <nav>
        <ul>
            <li><a href="{{ route('admin.features.index') }}">{{ __('Back to Features') }}</a></li>
        </ul>
    </nav>
@endsection
@section('content')
    <div class="right">
        <x-form method="post" action="{{ route('admin.features.store') }}" enctype="multipart/form-data">
            <x-form-input name="title" label="Title" />
            <x-form-textarea name="body" placeholder="Beschreibung" />
            <x-form-submit />
        </x-form>
    </div>
@endsection
