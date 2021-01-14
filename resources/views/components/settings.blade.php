<x-layout>
    <div class="content-wrapper d-flex flex-column justify-content-center align-items-center">
        <p class="font-size-12">Note: Keyboard shortcuts are disabled on this page.</p>
        <h1 id="dark-mode-status">Dark Mode is set to &lt;undefined&gt;.</h1>
    </div>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', (event) => {
            halfmoon.onDOMContentLoaded();

            const darkModeStatus = document.querySelector('#dark-mode-status');

            darkModeStatus.innerHTML = `Dark Mode is set to ${Boolean(halfmoon.darkModeOn) ? "on" : "off"}.`;

            halfmoon.clickHandler = function(event) {
                const target = event.target;

                if (target.matches(".dark-mode-toggle")) {
                    darkModeStatus.innerHTML = `Dark Mode is set to ${Boolean(halfmoon.darkModeOn) ? "on" : "off"}.`;
                }
            }
        });
    </script>
</x-layout>
