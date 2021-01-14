<x-layout>
    <div class="content-wrapper">
        <section class="content">
            <h1 class="content-title mb-0" style="font-size: 2.8rem;">
                API Docs
            </h1>
            <p>
                Academy Hub has a full-fledged API powered by <a href="https://laravel.com/docs/8.x/sanctum" class="hyperlink">Laravel Sanctum</a>.
            </p>
            <p>
                Below you will find the API endpoints.
            </p>
            <strong>
                Note: You need to register an account via <a href="{{ route('register') }}" class="hyperlink">Register</a> page,
                get token via <code class="code">GET /api/tokens</code> route
                and then use the token for other desired endpoints.
            </strong>
            <br/>
            <br/>
            <div class="p-20 text-monospace bg-light bg-dark-dm rounded font-size-12">
                <h5>Token:</h5>
                <ul>
                    <li><code class="code">GET /api/tokens</code></li>
                </ul>

                <br/>

                <h5>Tag:</h5>
                <ul>
                    <li><code class="code">GET /api/tags</code></li>
                    <li><code class="code">POST /api/tags</code></li>
                    <li><code class="code">GET /api/tags/{tag}</code></li>
                    <li><code class="code">PATCH /api/tags/{tag}</code></li>
                    <li><code class="code">DELETE /api/tags/{tag}</code></li>
                </ul>

                <br/>

                <h5>User:</h5>
                <ul>
                    <li><code class="code">GET /api/users</code></li>
                    <li><code class="code">POST /api/users</code></li>
                    <li><code class="code">GET /api/users/{user}</code></li>
                    <li><code class="code">PATCH /api/users/{user}</code></li>
                    <li><code class="code">DELETE /api/users/{user}</code></li>
                </ul>
            </div>
        </section>
    </div>
</x-layout>
