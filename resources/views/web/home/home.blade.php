@extends('layouts.app')

@section('content')

    <div id="map"></div>

    <div id="fotos">

        <livewire:coordinate-photos />

    </div>

    @if(Auth::check())

        @include('backoffice.user.admin')

    @endif

@endsection

@push('scripts')

    @include('web.home.scripts')

@endpush
