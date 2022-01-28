
@extends('layouts.main')

@section('title', __('Manufacturer'))
@section('header', $manufacturer->name)
@section('links')
    <nav>
        <ul>
            <li><a href="{{ route('admin.manufacturers.index') }}">{{ __('Back to Manufacturers') }}</a></li>
            <li><a href="{{ route('admin.manufacturers.create') }}">{{ __('New Entry') }}</a></li>
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
