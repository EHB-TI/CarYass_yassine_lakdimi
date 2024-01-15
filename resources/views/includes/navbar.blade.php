
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ Auth::check() ? route('welcome') : 'welcome' }}">Car<span>Yass</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">

                    @auth
                        @if(Auth::user()->typeUser == 1)
                            <!-- Admin Navigation -->
                            <li class="nav-item"><a href="{{ route('car') }}" class="nav-link">Your cars</a></li>
                            <li class="nav-item"><a href="{{ route('add-car') }}" class="nav-link">Add Car</a></li>
                            <li class="nav-item"><a href="{{ route('admin-panel') }}" class="nav-link">Panel</a></li>
                            <li class="nav-item"><a href="{{ route('index') }}" class="nav-link">Messages</a></li>
                            <li class="nav-item"><a href="{{ route('faq.create') }}" class="nav-link"> Add FAQ</a></li>
                            <a class="nav-link" href="{{ route('faq-categories.create') }}">Create FAQ Category</a>

                        @else
                            <!-- User Navigation -->
                            <li class="nav-item"><a href="{{ route('welcome') }}" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="car" class="nav-link">Car</a></li>
                            <li class="nav-item"><a href="{{ route('contact.create') }}" class="nav-link">Contact</a></li>
                            <li class="nav-item"><a href="{{ route('faq.user_index') }}" class="nav-link">FAQs</a></li>

                            
                        @endif

                        <!-- Common Navigation for Authenticated Users -->
                        <li class="nav-item"><a href="about" class="nav-link">About</a></li>

                        <li class="nav-item"><a href="{{ route('profile') }}" class="nav-link">Profile</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @else
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endauth

                </ul>
            </div>
        </div>
    </nav>