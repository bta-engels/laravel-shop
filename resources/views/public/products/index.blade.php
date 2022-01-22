@extends('layouts.main')

@section('title', __('Products'))
@section('header', __('Products'))

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td> <a href="{{ route('products.show',$item)}}"> {{$item->name}}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
