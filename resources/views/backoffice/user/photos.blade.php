<div id="user-photo-screen" class="animate__animated d-none">

    <div class="d-flex justify-content-end">

        <button class="btn btn-link" onclick="hideUserPhotoScreen()">

            <i class="bi bi-x-circle h2 text-white"></i>

        </button>

    </div>

    <div class="row d-flex justify-content-center">

        <div class="col-md-6">

            <livewire:coordinate-info />

        </div>

    </div>

</div>

@push('scripts')

    <script>

        function showUserPhotoScreen() {

            document.querySelector('#user-photo-screen').classList.remove('d-none')
            document.querySelector('#user-photo-screen').classList.add('animate__fadeInRight')
            document.querySelector('#user-photo-screen').classList.remove('animate__fadeOutRight')
        }

        function hideUserPhotoScreen() {

            document.querySelector('#user-photo-screen').classList.add('animate__fadeOutRight')
            document.querySelector('#user-photo-screen').classList.remove('animate__fadeInRight')

            setTimeout(() => {

                document.querySelector('#user-photo-screen').classList.add('d-none')
            }, 1000);

        }

    </script>

@endpush
