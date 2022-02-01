@extends('layouts.main')

@section('title', __('Pages'))
@section('header', __('Pages'))
@section('links')
    <nav>
        <ul>
            <li><a href="{{ route('admin.pages.create') }}">{{ __('New Entry') }}</a></li>
        </ul>
    </nav>
@endsection

@section('content')
    <div class="contBox">
        @if($data->count() > 0)
            @foreach($data as $item)

                <div class="box">
                    <h2><a href="{{ route('admin.pages.show',$item) }}">{{ $item->title }}</a></h2>
                    <p>{{ $item->body }}</p>
                    <div>
                        <a href="{{ route('admin.pages.edit',$item) }}">edit</a>
                        <a class="delsoft" href="{{ route('admin.pages.destroy',$item) }}">delete</a>
                    </div>
                </div>

            @endforeach
        @endif
    </div>
@endsection
