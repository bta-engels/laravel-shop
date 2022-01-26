@extends('layouts.main')

@section('title', __('Products'))
@section('header', __('Products'))

@section('content')
    <div>
        <a href="{{ route('admin.products.create') }}">{{ __('Neueintrag') }}</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Kategorie</th>
                <th>Hersteller</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @if ($data->count() > 0)
                @foreach($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td><a href="{{ route('admin.products.show',$item) }}">{{ $item->name }}</a></td>
                        <td>{{ $item->category->name }}</td>
                        <td>{{ $item->manufacturer->name }}</td>
                        <td><a href="{{ route('admin.products.edit',$item) }}">edit</a></td>
                        <td><a class="delsoft" href="{{ route('admin.products.destroy',$item) }}">delete</a></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
