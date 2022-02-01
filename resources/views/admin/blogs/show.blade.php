
@extends('layouts.main')

@section('title', __('Blog'))
@section('header', $blog->name)
@section('links')
    <nav>
        <ul>
            <li><a href="{{ route('admin.blogs.index') }}">{{ __('Back to Blogs') }}</a></li>
            <li><a href="{{ route('admin.blogs.create') }}">{{ __('New Entry') }}</a></li>
        </ul>
    </nav>
@endsection

@section('content')
    <div>
        <p>{!! nl2br($blog->body) !!}</p>
    </div>
@endsection
