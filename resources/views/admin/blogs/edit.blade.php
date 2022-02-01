@extends('layouts.main')

@section('title', __('Edit Blog'))
@section('header', __('Edit Blog'))
@section('links')
    <nav>
        <ul>
            <li><a href="{{ route('admin.blogs.index') }}">{{ __('Back to Blogs') }}</a></li>
            <li><a href="{{ route('admin.blogs.create') }}">{{ __('New Entry') }}</a></li>
        </ul>
    </nav>
@endsection

@section('content')
    <div class="right">
        <x-form action="{{ route('admin.blogs.update', $blog) }}">
            @method('put')
            @bind($blog)
            <x-form-input name="title" label="Title" />
            <x-form-textarea name="body" placeholder="Beschreibung" />
            @endbind

            <x-form-submit />
        </x-form>
    </div>
@endsection
