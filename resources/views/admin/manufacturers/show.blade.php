
@extends('layouts.main')

@section('title', __('Manufacturer'))
@section('header', $manufacturer->name)

@section('content')
    <div>
        <p>{{$manufacturer->description}}</p>
    </div>
    @if ($manufacturer->products->count())
        <h2 style="color:DodgerBlue;  font-weight: bold;">Unserer Produckte</h2>
        <div>
            <ul>
                @foreach($manufacturer->products as $product)
                    <li>{{$product->name}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <a href="{{ route('admin.manufacturers.index') }}" style="color:DodgerBlue;  font-weight: bold;">Zurück zu Manufacturers</a>
@endsection
