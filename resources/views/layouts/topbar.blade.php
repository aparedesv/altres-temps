<div id="topbar" class="p-0 m-0 bg-light border-bottom">

    <nav class="navbar navbar-light">

        <div class="container">

            <a class="navbar-brand" href="#">

                <img src="https://osonaweb.cat/assets/img/logo_osonaweb.png" class="ms-2">

            </a>

            <div class="d-flex align-items-center pe-3">

                <div>

                    <!-- Right Side Of Navbar -->
                    @guest
                        <ul class="navbar-nav ms-auto list-group list-group-horizontal">
                            <!-- Authentication Links -->
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item ms-4">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        </ul>
                    @else

                        <div class="ms-4">

                            <a href="#" class="text-decoration-none text-dark align-top">
                                {{ Auth::user()->name }}
                            </a>

                            <a
                                class="text-decoration-none text-white ps-2" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                            >
                                <i class="bi bi-box-arrow-right text-dark h4"></i>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </div>
                    @endguest

                </div>

            </div>
        </div>
    </nav>

</div>
