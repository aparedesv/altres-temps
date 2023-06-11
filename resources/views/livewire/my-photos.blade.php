<div id="my-photos" class="w-100 py-4 text-white table-responsive">

    <label class="fs-4">les meves fotos</label>

    <table class="table table-sm table-borderless">

        <thead>

            <tr>

                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>

            </tr>

        </thead>

        <tbody>

            @foreach($pictures as $picture)

                <tr>

                    <td>
                        <button class="btn" onclick="deletePhoto( {{ $picture->id }} )">
                            <i class="bi bi-trash text-white"></i>
                        </button>
                    </td>
                    <td>
                        <a
                            class="btn"
                            href="{{ $picture->picture }}"
                            data-toggle="lightbox"
                            data-caption="{{ $picture->name }}"
                        >
                            <i class="bi bi-camera text-white"></i>
                        </a>
                    </td>
                    <td>
                        <button class="btn" onclick="livewire.emit('showCoordinateInfo', {{ $picture->id_coordinate }});showPhotoScreen()">
                            <i class="bi bi-pin-map text-white"></i>
                        </button>
                    </td>
                    <td>
                        <button class="btn text-white" onclick="livewire.emit('editPhoto', {{ $picture->id }})">
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

@push('scripts')

    <script>

        function deletePhoto(photoId) {

            console.log('hola');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
            }).then((result) => {
                if (result.isConfirmed) {
                    livewire.emit('deletePhoto', photoId);
                }
            })

        }

    </script>

@endpush
