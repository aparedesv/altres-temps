<div class="slick-carousel">

    @if ($coordinate && !empty($coordinate->pictures))

        @foreach($coordinate->pictures as $picture)

            <div class="p-4">

                <div class="w-100 position-relative">

                    <a
                        class="btn bs5-lightbox"
                        href="{{ $picture->picture }}"
                        data-toggle="lightbox"
                        data-gallery="example-gallery"
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

        <script id="lightbox-script" type="text/javascript">

            document.querySelectorAll('.bs5-lightbox').forEach((el) => el.addEventListener('click', (e) => {
                e.preventDefault();
                const lightbox = new Lightbox(el);
                lightbox.show();
            }));

            $('.slick-carousel').slick({
                draggable: false,
                infinite: false,
                slidesToShow: 6,
                slidesToScroll: 1
            });

        </script>

    @else

        <p>No s'ha seleccionat cap objecte.</p>

    @endif

</div>

<style>
    .slick-slider {
        width: calc(100% - 100px);
        margin: 0 auto;
    }
    .slick-prev:before {
        color: red;
    }
    .slick-next:before {
        color: red;
    }
    .slick-carousel .slick-slide:last-child {
        display: none;
    }
</style>

