@extends('layouts.main')

@section('title', __('Products'))
@section('header', __('Products'))

@section('content')
@if($data && $data->count() > 0)
    <table class="table-auto">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
    @foreach($data as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td><a href="{{ route('products.show', $item) }}">{{ $item->name }}</a></td>
        </tr>
    @endforeach
    </table>
@else
    <h3>Keine Daten vorhanden</h3>
@endif
@endsection
