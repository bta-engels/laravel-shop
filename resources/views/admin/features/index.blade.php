@extends('layouts.main')

@section('title', __('Features'))
@section('header', __('Features'))
@section('links')
    <nav>
        <ul>
            <li><a href="{{ route('admin.features.create') }}">{{ __('New Entry') }}</a></li>
        </ul>
    </nav>
@endsection

@section('content')
    <div class="contBox">
    @if($data->count() > 0)
        @foreach($data as $item)

                <div class="box">
                    <h2><a href="{{ route('admin.features.show',$item) }}">{{ $item->title }}</a></h2>
                    <p>{{ $item->body }}</p>
                    <div>
                        <a href="{{ route('admin.features.edit',$item) }}">edit</a>
                        <a class="delsoft" href="{{ route('admin.features.destroy',$item) }}">delete</a>
                    </div>
                </div>

        @endforeach
    @endif
    </div>
@endsection
