@extends('layouts.main')

@section('title', __('Edit Manufacturer'))
@section('header', __('Edit Manufacturer'))

@section('content')
    <div class="right">
        <x-form method="post" action="{{ route('admin.manufacturers.store') }}">
            <x-form-input name="name" label="Name" />
            <x-form-textarea name="description" placeholder="Beschreibung" />
            <x-form-submit />
        </x-form>
    </div>
@endsection
