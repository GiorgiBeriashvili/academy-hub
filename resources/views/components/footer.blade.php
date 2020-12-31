<nav class="navbar navbar-fixed-bottom justify-content-between">
    <!-- Reference: https://www.gethalfmoon.com/docs/navbar#navbar-fixed-bottom -->
    <ul class="navbar-nav d-none d-md-flex">
        <x-navigation-item type="nav-item" route="/terms-of-service" name="Terms of Service" />
        <x-navigation-item type="nav-item" route="/privacy-policy" name="Privacy Policy" />
    </ul>
    <a href="{{ route('/') }}" class="navbar-brand m-auto">
        <x-logo size="32" />
    </a>
    <ul class="navbar-nav d-none d-md-flex">
        <x-navigation-item type="nav-item" route="/contact" name="Contact Us" />
        <x-navigation-item type="nav-item" route="{{ route('license') }}" name="© Copyright 2020" />
    </ul>
</nav>
