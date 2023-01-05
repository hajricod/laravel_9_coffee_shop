<nav class="navbar fixed-top navbar-expand-md navbar-dark shadow-none">
    <div class="container">
        <div class="dropdown mx-3">
            <button class="btn dropdown border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag text-light" viewBox="0 0 16 16">
                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                </svg>
                <span class="badge rounded-pill text-light">4</span>
            </button>
            <ul class="dropdown-menu rounded-0 p-0">
                <li>
                    <a class="dropdown-item py-2 d-flex justify-content-between align-items-center" href="#">
                        <div style="width: 150px">
                            <p class="m-0">Amricano</p>
                        </div>
                        <div style="width: 100px">
                            <span class="badge rounded-pill text-dark">x1</span>
                            <span class="badge rounded-pill text-dark">OMR 1.000</span>
                        </div>
                    </a>
                    <a class="dropdown-item py-2 d-flex justify-content-between align-items-center" href="#">
                        <div style="width: 150px">
                            <p class="m-0">Latte</p>
                        </div>
                        <div style="width: 100px">
                            <span class="badge rounded-pill text-dark">x1</span>
                            <span class="badge rounded-pill text-dark">OMR 1.500</span>
                        </div>
                    </a>
                    <a class="dropdown-item py-2 d-flex justify-content-between align-items-center" href="#">
                        <div style="width: 150px">
                            <p class="m-0">Cappuccino</p>
                        </div>
                        <div style="width: 100px">
                            <span class="badge rounded-pill text-dark">x1</span>
                            <span class="badge rounded-pill text-dark">OMR 2.000</span>
                        </div>
                    </a>
                    <a class="dropdown-item py-2 d-flex justify-content-between align-items-center" href="#">
                        <div style="width: 150px">
                            <p class="m-0">Cortado</p>
                        </div>
                        <div style="width: 100px">
                            <span class="badge rounded-pill text-dark">x1</span>
                            <span class="badge rounded-pill text-dark">OMR 1.800</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <a class="navbar-brand" href="{{ url('/') }}">
            {{-- {{ config('app.name', 'Laravel') }} --}}
            <img src="{{asset('images/8716855_coffee_shop_bean_drink_beverage_icon.svg')}}" width="40rem" alt="Logo">
        </a>

        <button class="navbar-toggler shadow-sm border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="/">{{ __('Home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#coffee-menu">{{ __('Menu') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#contact-us">{{ __('Contact') }}</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end bg-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item bg-dark text-light" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
