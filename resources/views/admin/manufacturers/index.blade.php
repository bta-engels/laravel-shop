@extends('layouts.main')

@section('title', __('Manufactuers'))
@section('header', __('Manufacturers'))

@section('content')
    <div>
        <a href="{{ route('admin.manufacturers.create') }}">{{ __('Neueintrag') }}</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @if ($data->count() > 0)
                @foreach($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td><a href="{{ route('admin.manufacturers.show',$item) }}">{{ $item->name }}</a></td>
                        <td><a href="{{ route('admin.manufacturers.edit',$item) }}">edit</a></td>
                        <td><a class="delsoft" href="{{ route('admin.manufacturers.destroy',$item) }}">delete</a></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
