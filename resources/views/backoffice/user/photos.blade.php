<div id="my-photos" class="w-100 py-4 text-white table-responsive">

    <label class="fs-4">les meves fotos</label>

    <table class="table table-sm table-borderless">

        <thead>

            <tr>

                <th></th>
                <th></th>
                <th></th>
                <th></th>

            </tr>

        </thead>

        <tbody>

            @foreach(Auth::user()->pictures as $picture)

                <tr>

                    <td>
                        <button class="btn">
                            <i class="bi bi-trash text-white"></i>
                        </button>
                    </td>
                    <td>
                        <button class="btn" onclick="livewire.emit('showCoordinateInfo', {{ $picture->id_coordinate }});showPhotoScreen()">
                            <i class="bi bi-camera text-white"></i>
                        </button>
                    </td>
                    <td>
                        <button class="btn text-white">
                            {{ $picture->date }}
                        </button>
                    </td>
                    <td class="ellipsis">
                        <button class="btn text-white">
                            {{ $picture->name }}
                        </button>
                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>

</div>
