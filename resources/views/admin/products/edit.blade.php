@extends('layouts.main')

@section('title', __('Edit Products'))
@section('header', __('Edit Products'))

@section('content')
    <div class="right">
        <x-form action="route{{'admin.products.update',$product}}">
            <x-form-input name="name" label="Name"/>
            <x-form-textarea name="description" placeholder="Beschreibung"/>
            <x-form-submit />
        </x-form>

    </div>

@endsection
