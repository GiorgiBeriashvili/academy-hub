<nav class="navbar">
    <!-- Reference: https://www.gethalfmoon.com/docs/navbar -->
    <div class="navbar-content">
        @auth
            <button class="btn btn-action" type="button" onClick="halfmoon.toggleSidebar();">
                <i class="fa fa-bars" aria-hidden="true"></i>
                <span class="sr-only">Toggle sidebar</span>
            </button>
        @endauth

        <a href="{{ route('/') }}" class="navbar-brand">
            <x-logo size="32" /> <span style="font-size: 20px; padding-top: 8px; padding-left: 8px;">Academy Hub</span>
        </a>

        <ul class="navbar-nav d-none d-md-flex" style="padding-top: 4px;">
            <x-navigation-item type="nav-item" route="/statistics" name="Statistics" />
            <x-navigation-item type="nav-item" route="/about" name="About" />
            <x-navigation-item type="nav-item" route="/contact" name="Contact Us" />
            <x-navigation-item type="nav-item" route="/license" name="License (MIT)" />
        </ul>
    </div>

    <form class="form-inline d-none d-md-flex ml-auto" action="..." method="...">
        <button class="btn btn-square" type="button" onclick="window.open('https://github.com/GiorgiBeriashvili/academy-hub', '_blank')">
            <i class="fa fa-github" aria-hidden="true"></i>
        </button>

        <a href="https://github.com/GiorgiBeriashvili/academy-hub/stargazers" target="_blank" class="badge mr-10">
            <i class="fa fa-star mr-5" style="margin-top: 3px;" aria-hidden="true"></i>
            <span class="font-weight-bolder" style="margin-right: 2px;">|</span>
            <span id="star-count"></span> stars
        </a>

        <button class="btn btn-action mr-5" type="button" onClick="halfmoon.toggleDarkMode()">
            <i class="fa fa-moon-o" aria-hidden="true"></i>
            <span class="sr-only">Toggle dark mode</span>
        </button>
        <button class="btn btn-primary" type="submit">
            Sign in
        </button>
        <button class="btn btn-primary" type="submit">
            Sign up
        </button>
    </form>
    <div class="navbar-content d-md-none ml-auto">
        <div class="dropdown with-arrow">
            <button class="btn" data-toggle="dropdown" type="button" id="navbar-dropdown-toggle-btn-1">
                Menu
                <i class="fa fa-angle-down" aria-hidden="true"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right w-200" aria-labelledby="navbar-dropdown-toggle-btn-1">
                <x-navigation-item type="dropdown-item" route="/statistics" name="Statistics" />
                <x-navigation-item type="dropdown-item" route="/about" name="About" />
                <x-navigation-item type="dropdown-item" route="/contact" name="Contact Us" />
                <x-navigation-item type="dropdown-item" route="/license" name="License (MIT)" />
                <div class="dropdown-divider"></div>
                <div class="dropdown-content">
                    <form action="..." method="...">
                        <button class="btn btn-primary btn-block" type="submit">
                            Sign in
                        </button>
                        <div style="padding: 4px 0;"></div>
                        <button class="btn btn-primary btn-block" type="submit">
                            Sign up
                        </button>
                    </form>
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
