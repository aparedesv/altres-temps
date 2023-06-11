<a
    class="btn"
    href="{{ $picture->picture }}"
    data-toggle="lightbox"
    data-caption="{{ $picture->name }}"
>
    <img src="{{ $picture->picture }}" alt="{{ $picture->name }}" class="img-fluid img-thumbnail">
</a>
