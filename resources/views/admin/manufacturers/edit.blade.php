@extends('layouts.main')

@section('title', __('Edit Manufacturer'))
@section('header', __('Edit Manufacturer'))

@section('content')
    <div class="right">
        <x-form action="{{ route('admin.manufacturers.update', $manufacturer) }}">
            @method('put')
            @bind($manufacturer)
            <x-form-input name="name" label="Name" />
            <x-form-textarea name="description" placeholder="Beschreibung" />
            @endbind

            <x-form-submit />
        </x-form>
    </div>
@endsection
