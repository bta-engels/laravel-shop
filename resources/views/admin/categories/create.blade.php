@extends('layouts.main')

@section('title', __('Edit Category'))
@section('header', __('Edit Category'))
@section('links')
    <nav>
        <ul>
            <li><a href="{{ route('admin.categories.index') }}">{{ __('Back to Categories') }}</a></li>
        </ul>
    </nav>
@endsection
@section('content')
    <div class="right">
        <x-form method="post" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
            <x-form-input name="name" label="Name" />
            <x-form-submit />
        </x-form>
    </div>
@endsection
