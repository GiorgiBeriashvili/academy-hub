<div class="sidebar">
    <!-- Reference: https://www.gethalfmoon.com/docs/sidebar -->
    <div class="sidebar-menu">
        <div class="sidebar-content">
            <label>
                <input id="search-bar" type="text" class="form-control" placeholder="Search" />
            </label>
            <div class="mt-10 font-size-12">
                Press <kbd>Shift</kbd> + <kbd>f</kbd> to focus
            </div>
        </div>
        {/* <a href="/curios" class="hyperlink"> */}
        <h5 class="sidebar-title">Curios</h5>
        {/* </a> */}
        <div class="sidebar-divider"></div>
        <Link to="/curios/chip-8-emulator" class="sidebar-link sidebar-link-with-icon active">
        <span class="sidebar-icon">
                    <i class="fa fa-microchip" aria-hidden="true"></i>
                </span>
        CHIP-8 Emulator
        </Link>
        <Link to="/curios/game-of-life" class="sidebar-link sidebar-link-with-icon">
        <span class="sidebar-icon">
                    <i class="fa fa-gamepad" aria-hidden="true"></i>
                </span>
        Game of Life
        </Link>
        <Link to="/curios/gif-maker" class="sidebar-link sidebar-link-with-icon">
        <span class="sidebar-icon">
                    <i class="fa fa-file-image-o" aria-hidden="true"></i>
                </span>
        GIF Maker
        </Link>
        <Link to="/curios/periodic-table" class="sidebar-link sidebar-link-with-icon">
        <span class="sidebar-icon">
                    <i class="fa fa-flask" aria-hidden="true"></i>
                </span>
        Periodic Table
        </Link>
        <br />
        <h5 class="sidebar-title">Components</h5>
        <div class="sidebar-divider"></div>
        <a href="#" class="sidebar-link sidebar-link-with-icon">
                <span class="sidebar-icon">
                    <i class="fa fa-folder-open-o" aria-hidden="true"></i>
                </span>
            File explorer
        </a>
        <a href="#" class="sidebar-link sidebar-link-with-icon">
                <span class="sidebar-icon">
                    <i class="fa fa-table" aria-hidden="true"></i>
                </span>
            Spreadsheet
        </a>
        <a href="#" class="sidebar-link sidebar-link-with-icon">
                <span class="sidebar-icon">
                    <i class="fa fa-map-o" aria-hidden="true"></i>
                </span>
            Map
        </a>
        <a href="#" class="sidebar-link sidebar-link-with-icon">
                <span class="sidebar-icon">
                    <i class="fa fa-commenting-o" aria-hidden="true"></i>
                </span>
            Messenger
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
