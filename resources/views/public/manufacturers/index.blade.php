@extends('layouts.main')

@section('title', __('Manufacturers'))
@section('header', __('Manufacturers'))

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
                <td> <a href="{{ route('manufacturers.show',$item)}}"> {{$item->name}}</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
