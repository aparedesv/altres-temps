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
                        <input type="file" accept="image/*" class="form-input py-2 px-3 pr-4 rounded-md focus:outline-none focus:shadow-outline-blue-500">
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
                </form>

            </div>

        </div>

    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" id="formFile">
                  </div>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

    @push('scripts')

        @include($view.'includes')

    @endpush


@endsection
