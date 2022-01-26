
@extends('layouts.main')

@section('title', __('Manufacturer'))
@section('header', $manufacturer->name)

@section('content')
    <div>
        <p>{!! nl2br($product->description) !!}</p>
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
