<div class="m-0 row">

    @if($coordinate)

        <div class="text-white w-100">

            <p class="mb-0"> Lat: {{ $coordinate->latitude }} </p>
            <p class="mb-0"> Lon: {{ $coordinate->longitude }} </p>

        </div>

        <div class="text-white w-100">

            <livewire:upload-photo :coordinateId="$coordinate->id" />

        </div>

    @endif

</div>
