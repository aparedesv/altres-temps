<div class="m-0 row">

    <x-photo-lightbox :picture="$picture"></x-photo-lightbox>

    <form wire:submit.prevent="update">

        @if($errors->any())
            <div class="alert alert-danger mb-3" role="alert">
                @error('name')
                    <p class="error mb-0">{{ $message }}</p>
                @enderror
                @error('date')
                    <p class="error mb-0">{{ $message }}</p>
                @enderror
                @error('photo')
                    <p class="error mb-0">{{ $message }}</p>
                @enderror
            </div>
        @endif

        <div class="mb-3">
            <label class="form-label">Títol de la foto</label>
            <input type="text" wire:model="name" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Data de la foto</label>
            <input type="date" wire:model="date" class="form-control">
        </div>

        <button class="btn btn-primary" type="submit">Update</button>

    </form>

</div>
