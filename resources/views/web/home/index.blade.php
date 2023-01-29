@extends('web.layouts.app')

@section('content')

    <div class="flex p-0 m-0">

        <div class="w-3/4">

            <div id="map"></div>

        </div>

        <div class="w-1/4 bg-slate-200">

            <div id="hola" class="hidden">

                <form class="m-2 p-2">

                    <div class="rounded-md shadow-sm my-2">
                        <label>imatge</label>
                        <br>
                        <input type="file" accept="image/*" class="form-input w-full bg-slate-200 py-2 px-3 pr-4 rounded-md focus:outline-none focus:shadow-outline-blue-500">
                    </div>

                    <div class="rounded-md shadow-sm my-2">
                        <label>any</label>
                        <br>
                        <select class="form-select w-full bg-slate-200 py-2 px-3 pr-8 rounded-md focus:outline-none focus:shadow-outline-blue-500">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>

                    <div class="rounded-md shadow-sm my-2">
                        <label>títol</label>
                        <input type="text" class="form-input w-full bg-slate-200 py-2 px-3 pr-4 rounded-md focus:outline-none focus:shadow-outline-blue-500">
                    </div>

                    <div class="mt-4">

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
