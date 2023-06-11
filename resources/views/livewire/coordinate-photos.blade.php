<div class="m-0 row">
    @if ($coordinate && !empty($coordinate->pictures))

        @foreach($coordinate->pictures as $picture)

            <div class="col-sm-2 p-4">

                <div class="w-100 position-relative">

                    <a
                        class="btn my-lightbox-toggle"
                        href="{{ $picture->picture }}"
                        data-toggle="lightbox"
                        data-caption="{{ $picture->name }}"
                    >
                        <img src="{{ $picture->picture }}" alt="{{ $picture->name }}" class="img-fluid img-thumbnail">
                    </a>

                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary"> {{ $picture->carbonDate->format('Y') }} </span>

                    <div>
                        <p class="mb-0"> {{ $picture->name }} </p>
                    </div>

                </div>

            </div>

        @endforeach

    @else

        <p>No s'ha seleccionat cap objecte.</p>

    @endif
</div>

