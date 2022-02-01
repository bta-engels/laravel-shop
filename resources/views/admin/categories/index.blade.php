@extends('layouts.main')

@section('title', __('Categories'))
@section('header', __('Categories'))
@section('links')
    <nav>
        <ul>
            <li><a href="{{ route('admin.categories.create') }}">{{ __('New Entry') }}</a></li>
        </ul>
    </nav>
@endsection

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>{{ __('Name') }}</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @if($data->count() > 0)
                @foreach($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{ $item->name }}</td>
                        <td><a href="{{ route('admin.categories.edit',$item) }}">edit</a></td>
                        <td><a class="delsoft" href="{{ route('admin.categories.destroy',$item) }}">delete</a></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
