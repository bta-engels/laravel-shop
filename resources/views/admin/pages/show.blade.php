
@extends('layouts.main')

@section('title', __('Page'))
@section('header', $page->name)
@section('links')
    <nav>
        <ul>
            <li><a href="{{ route('admin.pages.index') }}">{{ __('Back to Pages') }}</a></li>
            <li><a href="{{ route('admin.pages.create') }}">{{ __('New Entry') }}</a></li>
        </ul>
    </nav>
@endsection

@section('content')
    <div>
        <p>{!! nl2br($page->body) !!}</p>
    </div>
@endsection
