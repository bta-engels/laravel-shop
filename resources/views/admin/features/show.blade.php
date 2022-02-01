
@extends('layouts.main')

@section('title', __('Feature'))
@section('header', $feature->name)
@section('links')
    <nav>
        <ul>
            <li><a href="{{ route('admin.features.index') }}">{{ __('Back to Features') }}</a></li>
            <li><a href="{{ route('admin.features.create') }}">{{ __('New Entry') }}</a></li>
        </ul>
    </nav>
@endsection

@section('content')
    <div>
        <p>{!! nl2br($feature->body) !!}</p>
    </div>
@endsection
