<nav class="navbar">
    <!-- Reference: https://www.gethalfmoon.com/docs/navbar -->
    <div class="navbar-content">
        @auth
            <button class="btn btn-action" type="button" onClick="halfmoon.toggleSidebar();">
                <i class="fa fa-bars" aria-hidden="true"></i>
                <span class="sr-only">Toggle sidebar</span>
            </button>
        @endauth

        <a href="{{ route(\App\Providers\RouteServiceProvider::HOME) }}" class="navbar-brand">
            <x-logo size="32" /> <span class="hidden-sm-and-down" style="font-size: 20px; padding-top: 8px; padding-left: 8px;">Academy Hub</span>
        </a>

        <ul class="navbar-nav d-none d-md-flex hidden-lg-and-down" style="padding-top: 4px;">
            <x-navigation-item type="nav-item" route="/statistics" name="Statistics" />
            <x-navigation-item type="nav-item" route="/about" name="About" />
            <x-navigation-item type="nav-item" route="mailto:support@academy.hub" name="Contact Us" />
            <x-navigation-item type="nav-item" route="{{ route('license') }}" name="License (MIT)" />
        </ul>
    </div>

    <div class="form-inline d-none d-md-flex ml-auto">
        <form class="form-inline m-auto mr-10" action="{{ route('academies.search') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <label for="search-academy"><i class="fa fa-filter"></i></label>
            <div class="input-group @if($errors->has('query')) is-invalid @endif">
                <input id="search-academy" name="search-academy" type="text" class="form-control" placeholder="Search academy" required="required">
                <div class="input-group-append">
                    <button class="btn" type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <span class="sr-only">Search academy</span>
                    </button>
                </div>
            </div>
        </form>

        <button class="btn btn-square hidden-md-and-down" type="button" onclick="window.open('https://github.com/GiorgiBeriashvili/academy-hub', '_blank')">
            <i class="fa fa-github" aria-hidden="true"></i>
        </button>

        <a href="https://github.com/GiorgiBeriashvili/academy-hub/stargazers" target="_blank" class="badge mr-10 hidden-md-and-down">
            <i class="fa fa-star mr-5" style="margin-top: 3px;" aria-hidden="true"></i>
            <span class="font-weight-bolder" style="margin-right: 2px;">|</span>
            <span id="star-count"></span> stars
        </a>

        <button class="btn btn-action mr-5" type="button" onClick="halfmoon.toggleDarkMode()">
            <i class="fa fa-moon-o" aria-hidden="true"></i>
            <span class="sr-only">Toggle dark mode</span>
        </button>

        @guest
            <a href="{{ route('login') }}" class="m-5">
                <button class="btn btn-primary" type="button">
                    Login
                </button>
            </a>

            <a href="{{ route('register') }}" class="m-5">
                <button class="btn btn-primary" type="button">
                    Register
                </button>
            </a>
        @endguest

        @auth
            <div>
                <form action="{{ route('logout') }}" method="post" class="m-5">
                    @csrf
                    <button class="btn btn-primary" type="submit">
                        Logout
                    </button>
                </form>
            </div>
        @endauth
    </div>
    <div class="navbar-content hidden-md-and-up ml-auto">
        <div class="dropdown with-arrow mr-10">
            <button class="btn" data-toggle="dropdown" type="button" id="..." aria-haspopup="true" aria-expanded="false">
                Search <i class="fa fa-angle-down" aria-hidden="true"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="...">
                <form class="form-inline m-auto w-200" action="{{ route('academies.search') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <label class="ml-5" for="search-academy"><i class="fa fa-filter"></i></label>
                    <div class="input-group @if($errors->has('query')) is-invalid @endif">
                        <input id="search-academy" name="search-academy" type="text" class="form-control" placeholder="Search academy" required="required">
                        <div class="input-group-append">
                            <button class="btn" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <span class="sr-only">Search academy</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="dropdown with-arrow">
            <button class="btn" data-toggle="dropdown" type="button" id="navbar-dropdown-toggle-btn-1">
                Menu
                <i class="fa fa-angle-down" aria-hidden="true"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right w-200" aria-labelledby="navbar-dropdown-toggle-btn-1">
                <x-navigation-item type="dropdown-item" route="/statistics" name="Statistics" />
                <x-navigation-item type="dropdown-item" route="/about" name="About" />
                <x-navigation-item type="dropdown-item" route="mailto:support@academy.hub" name="Contact Us" />
                <x-navigation-item type="dropdown-item" route="{{ route('license') }}" name="License (MIT)" />
                <div class="dropdown-divider"></div>
                <div class="dropdown-content">
                    @guest
                        <a href="{{ route('login') }}">
                            <button class="btn btn-primary btn-block" type="button">
                                Login
                            </button>
                        </a>

                        <div style="padding: 4px 0;"></div>

                        <a href="{{ route('register') }}">
                            <button class="btn btn-primary btn-block" type="button">
                                Register
                            </button>
                        </a>
                    @endguest

                    @auth
                        <div>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button class="btn btn-primary btn-block" type="submit">
                                    Logout
                                </button>
                            </form>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</nav>

<script defer>
    const starCount = document.querySelector("#star-count");

    const dots = {
        interval: 80,
        frames: ['⠋', '⠙', '⠹', '⠸', '⠼', '⠴', '⠦', '⠧', '⠇', '⠏'],
    };

    let index = 0;

    const interval = setInterval(() => {
        starCount.textContent = dots.frames[index = ++index % dots.frames.length];
    }, dots.interval);

    const onError = (reason) => {
        clearInterval(interval);

        starCount.textContent = reason;
    };

    fetch("https://api.github.com/repos/GiorgiBeriashvili/academy-hub")
        .then(value => value.json())
        .catch(reason => onError(reason))
        .then(value => {
            setTimeout(() => {
                clearInterval(interval);

                starCount.textContent = value["stargazers_count"];
            }, 2000);
        }).catch(reason => onError(reason));
</script>
