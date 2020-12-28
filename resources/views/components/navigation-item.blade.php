<li class="{{ $type }} @if("/".\Illuminate\Support\Facades\Route::currentRouteName() === $route) active @endif">
    <a class="nav-link" href="{{ $route }}">
        {{ $name }}
    </a>
</li>
