@extends('layouts.app')

@section('content')

    <div id="map"></div>

    <!-- amb livewire?? -->
    <div id="fotos"></div>

@endsection

@push('scripts')

    @include('web.home.scripts')

@endpush
