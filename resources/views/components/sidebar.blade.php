<div class="sidebar">
    <!-- Reference: https://www.gethalfmoon.com/docs/sidebar -->
    <div class="sidebar-menu">
        <div class="sidebar-content text-center">
            <img class="img-fluid rounded-circle w-100 h-100" style="object-fit: cover; cursor: pointer;"
                 src="{{ asset('placeholder-image.png') }}" alt="User's profile picture"
                 onclick="enhanceImage('{{ \Illuminate\Support\Facades\Auth::id() }}', '{{ \Illuminate\Support\Facades\Auth::user()->avatar ?? asset('placeholder-image.png') }}');" />
            <h4>{{ \Illuminate\Support\Facades\Auth::user()->username }}</h4>
            <button class="btn btn-block" type="button">Edit Profile</button>
        </div>
        <h5 class="sidebar-title">Actions</h5>
        <div class="sidebar-divider"></div>
        <a href="#" class="sidebar-link sidebar-link-with-icon">
                <span class="sidebar-icon">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </span>
            View Profile
        </a>
        <a href="{{route('academies.create')}}" class="sidebar-link sidebar-link-with-icon">
                <span class="sidebar-icon">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </span>
            Create Academy
        </a>
        <a href="#" class="sidebar-link sidebar-link-with-icon">
                <span class="sidebar-icon">
                    <i class="fa fa-university" aria-hidden="true"></i>
                </span>
            Show Academies
        </a>
        <a href="#" class="sidebar-link sidebar-link-with-icon">
                <span class="sidebar-icon">
                    <i class="fa fa-gear" aria-hidden="true"></i>
                </span>
            Settings
        </a>
        <br />
        <h5 class="sidebar-title">Documentation</h5>
        <div class="sidebar-divider"></div>
        <a href="#" class="sidebar-link sidebar-link-with-icon">
                <span class="sidebar-icon">
                    <i class="fa fa-rocket" aria-hidden="true"></i>
                </span>
            Getting Started
        </a>
        <a href="#" class="sidebar-link sidebar-link-with-icon">
                <span class="sidebar-icon">
                    <i class="fa fa-book" aria-hidden="true"></i>
                </span>
            Guidelines
        </a>
        <a href="#" class="sidebar-link sidebar-link-with-icon">
                <span class="sidebar-icon">
                    <i class="fa fa-code" aria-hidden="true"></i>
                </span>
            API
        </a>
    </div>
</div>

<!-- Script for overriding keydown event handler function -->
<script type="text/javascript">
    /* Things to do once the DOM is loaded */
    document.addEventListener("DOMContentLoaded", function () {
        // Getting the search input
        const searchBar = document.querySelector("#search-bar");

        // Handle keydown events (overridden)
        halfmoon.keydownHandler = function(event) {
            event = event || KeyboardEvent;
            // Shortcuts are triggered only if no input, textarea, or select has focus
            if (!(document.querySelector("input:focus") || document.querySelector("textarea:focus") || document.querySelector("select:focus"))) {
                // Focus the repository search input when [Shift] + [F] is pressed
                if (event.shiftKey && event.key === "F") {
                    searchBar.focus();
                    event.preventDefault();
                }
            } else {
                if (event.key === "Escape") {
                    searchBar.blur();
                }
            }
            // You can handle other keydown events here using if or else-if statements
        }
    });
</script>
