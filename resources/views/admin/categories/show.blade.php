
@extends('layouts.main')

@section('title', __('Category'))
@section('header', $categories->name)
@section('links')
    <nav>
        <ul>
            <li><a href="{{ route('admin.categories.index') }}">{{ __('Back to Categories') }}</a></li>
            <li><a href="{{ route('admin.categories.create') }}">{{ __('New Entry') }}</a></li>
        </ul>
    </nav>
@endsection

@section('content')
    <div>
        <p>{!! nl2br($manufacturer->description) !!}</p>
        @if($manufacturer->products->count() > 0)
            <h3 class="font-bold mx-2">{{ __('Products') }}</h3>
            <ul>
                @foreach($manufacturer->products as $item)
                    <li>{{ $item->name }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
