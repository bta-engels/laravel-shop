@extends('layouts.main')

@section('title', __('Products'))
@section('header', __('Products'))

@section('content')

    <table class="table-auto">
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
        @foreach($data as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <!--td><a href="{{ route('product.show',$item) }}">{{ $item->name }}</a></td-->
            <td><a href="/products/{{ $item->id }}">{{ $item->name }}</a></td>
         </tr>
        @endforeach

    </table>

@endsection
