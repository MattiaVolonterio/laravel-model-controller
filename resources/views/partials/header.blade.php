<header class="bg-secondary">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a @class(['nav-link', 'active' => Route::currentRouteName() == 'home']) aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a @class(['nav-link', 'active' => Route::currentRouteName() == 'movie']) href="{{ route('movie') }}">Movie</a>
                        </li>
                        <li class="nav-item">
                            <a @class(['nav-link', 'active' => Route::currentRouteName() == 'about']) href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a @class([
                                'nav-link',
                                'active' => Route::currentRouteName() == 'contacts',
                            ]) href="{{ route('contacts') }}">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
