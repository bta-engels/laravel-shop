@extends('layouts.main')

@section('title', __('Edit Category'))
@section('header', __('Edit Category'))
@section('links')
    <nav>
        <ul>
            <li><a href="{{ route('admin.categories.index') }}">{{ __('Back to Categories') }}</a></li>
            <li><a href="{{ route('admin.categories.create') }}">{{ __('New Entry') }}</a></li>
        </ul>
    </nav>
@endsection

@section('content')
    <div class="right">
        <x-form action="{{ route('admin.categories.update', $category) }}">
            @method('put')
            @bind($category)
            <x-form-input name="name" label="Name" />
            @endbind

            <x-form-submit />
        </x-form>
    </div>
@endsection
