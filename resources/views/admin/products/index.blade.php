@extends('layouts.main')

@section('title', __('Products'))
@section('header', __('Products'))

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Manufacturer</th>
                <th>Category</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @if ($data->count() > 0)
                @foreach($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td><a href="{{ route('admin.products.show',$item) }}">{{ $item->name }}</a></td>
                        <td>{{$item->manufacturer->name}}</td>
                        <td>@if($item->category){{$item->category->name}}@endif</td>
                        <td><a href="{{ route('admin.products.edit',$item) }}">edit</a></td>
                        <td><a href="{{ route('admin.products.destroy',$item) }}">delete</a></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
