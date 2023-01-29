@extends('backoffice.layouts.app')

@section('content')

    <div class="flex p-0 m-0">

        <div class="w-3/4">

            <div id="map"></div>

        </div>

        <div class="w-1/4 bg-slate-200">

            <div id="upload-photo" class="hidden">

                <form class="m-2 p-2" action="{{ route('backoffice.upload.photo') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="rounded-md my-2">
                        <label>picture</label>
                        <br>
                        <input
                            name="picture"
                            type="file"
                            accept="image/jpeg, image/png, image/webp"
                            class="form-input w-full bg-slate-200 py-2 px-3 pr-4 rounded-md focus:outline-none focus:shadow-outline-blue-500"
                        >
                        @if ($errors->has('picture'))
                            <p class="input-text-subindex w-full bg-slate-200 text-red-600"> {{ $errors->first('picture') }} </p>
                        @endif
                    </div>

                    <div class="rounded-md my-2">
                        <label>date</label>
                        <br>
                        <input
                            name="date"
                            type="date"
                            max="{{$years->last()->year}}-12-31"
                            value="{{ old('date') }}"
                            class="form-input w-full bg-slate-200 py-2 px-3 pr-4 rounded-md focus:outline-none focus:shadow-outline-blue-500"
                        >
                        @if ($errors->has('date'))
                            <p class="input-text-subindex w-full bg-slate-200 text-red-600"> {{ $errors->first('date') }} </p>
                        @endif
                    </div>

                    <div class="rounded-md my-2">
                        <label>name</label>
                        <input
                            name="name"
                            type="text"
                            value="{{ old('name') }}"
                            class="form-input w-full bg-slate-200 py-2 px-3 pr-4 rounded-md focus:outline-none focus:shadow-outline-blue-500"
                        >
                        @if ($errors->has('name'))
                            <p class="input-text-subindex w-full bg-slate-200 text-red-600"> {{ $errors->first('name') }} </p>
                        @endif
                    </div>

                    <div class="mt-4">

                        <input type="hidden" id="upload-photo-latitude" name="latitude">
                        <input type="hidden" id="upload-photo-longitude" name="longitude">
                        <button class="bg-indigo-500 hover:bg-indigo-600 w-full text-white font-medium py-2 px-4 rounded-md">
                            upload image
                        </button>

                    </div>

                </form>

            </div>

        </div>s

    </div>

    @push('scripts')

        @include($view.'includes')

    @endpush


@endsection
