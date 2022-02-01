@extends('layouts.main')

@section('title', __('Edit Blogs'))
@section('header', __('Edit Blogs'))
@section('links')
    <nav>
        <ul>
            <li><a href="{{ route('admin.blogs.index') }}">{{ __('Back to Blogs') }}</a></li>
        </ul>
    </nav>
@endsection
@section('content')
    <div class="right">
        <x-form method="post" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data">
            <x-form-input name="title" label="Title" />
            <x-form-textarea name="body" placeholder="Beschreibung" />
            <x-form-submit />
        </x-form>
    </div>
@endsection
