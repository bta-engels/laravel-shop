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
            @if ($data->count() >0)
                @foreach($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td> <a href="{{ route('manufacturers.show',$item)}}"> {{$item->name}}</a></td>
                    </tr>
                @endforeach
            @else
                <span>Kein Datein vorhanden</span>
            @endif
        </tbody>
    </table>
@endsection
