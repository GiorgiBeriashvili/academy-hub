<x-layout>
    <div class="content-wrapper">
        <h2 class="text-white-dm text-black-lm" style="text-align: center;">404 - "{{ request()->getRequestUri() }}" Not Found</h2>
        <div id="astronaut" class="w-xl-auto h-xl-500 w-md-auto h-md-300 w-sm-auto h-sm-auto"></div>
    </div>

    <script defer>
        document.addEventListener("DOMContentLoaded", (event) => {
            lottie.loadAnimation({
                container: document.querySelector("#astronaut"),
                renderer: "svg",
                loop: true,
                autoplay: true,
                path: "{{ asset('astronaut.json') }}"
            });

            lottie.setSpeed(0.5);
            lottie.setQuality("low");
        });
    </script>
</x-layout>
