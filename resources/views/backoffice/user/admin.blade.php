<div id="user-photo-screen" class="animate__animated d-none">

    <div class="d-flex justify-content-end">

        <button class="btn btn-link" onclick="hideUserPhotoScreen()">

            <i class="bi bi-x-circle h2 text-white"></i>

        </button>

    </div>

    <div class="p-4">

        <ul class="nav nav-tabs" id="myTab" role="tablist">

            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>
            </li>

        </ul>

        <div class="tab-content" id="myTabContent">

            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

                <livewire:my-photos/>

            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                profile
            </div>
            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                contact
            </div>
            <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
                disabled
            </div>

        </div>

    </div>

</div>

<div id="photo-screen" class="animate__animated d-none">

    <div class="d-flex justify-content-end">

        <button class="btn btn-link" onclick="hidePhotoScreen()">

            <i class="bi bi-x-circle h2 text-white"></i>

        </button>

    </div>

    <div class="p-4">

        <div class="row d-flex justify-content-center">

            <div class="col-md-6">

                @if(session('screen') == 'picture')
                    <livewire:my-photos />
                @else
                    <livewire:coordinate-info />
                @endif

            </div>

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

        function showPhotoScreen() {

            document.querySelector('#photo-screen').classList.remove('d-none')
            document.querySelector('#photo-screen').classList.add('animate__fadeInRight')
            document.querySelector('#photo-screen').classList.remove('animate__fadeOutRight')
        }

        function hidePhotoScreen() {

            document.querySelector('#photo-screen').classList.add('animate__fadeOutRight')
            document.querySelector('#photo-screen').classList.remove('animate__fadeInRight')

            setTimeout(() => {

                document.querySelector('#photo-screen').classList.add('d-none')
            }, 1000);

        }

    </script>

@endpush
