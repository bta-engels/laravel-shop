@extends('layouts.main')

@section('title', __('Blogs'))
@section('header', __('Blogs'))
@section('links')
    <nav>
        <ul>
            <li><a href="{{ route('admin.blogs.create') }}">{{ __('New Entry') }}</a></li>
        </ul>
    </nav>
@endsection

@section('content')
    <div class="contBox">
        @if($data->count() > 0)
            @foreach($data as $item)

                <div class="box">
                    <h2><a href="{{ route('admin.blogs.show',$item) }}">{{ $item->title }}</a></h2>
                    <p>{{ $item->body }}</p>
                    <div>
                        <a href="{{ route('admin.blogs.edit',$item) }}">edit</a>
                        <a class="delsoft" href="{{ route('admin.blogs.destroy',$item) }}">delete</a>
                    </div>
                </div>

            @endforeach
        @endif
    </div>
@endsection
