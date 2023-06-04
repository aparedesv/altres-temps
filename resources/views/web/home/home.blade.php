@extends('layouts.app')

@section('content')

    <div id="map"></div>

    <div id="fotos">

        <livewire:coordinate-photos />

    </div>

@endsection

@push('scripts')

    @include('web.home.scripts')

@endpush
