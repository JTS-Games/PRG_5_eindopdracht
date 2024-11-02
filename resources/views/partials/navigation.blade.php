<style>
    * {
        color: black;
        text-decoration: none;
        font-family: Arial;
    }

    body {
        margin: 0 0 0 0;
    }

    .navBar {
        display: flex;
        gap: 2vw;
        padding-left: 5vw;
        padding-top: 3vh;
        padding-bottom: 3vh;
        background-color: #77FFDD;
    }
</style>

<nav class="navBar">
    <x-navlink href="{{route('home')}}" :active="request()->is('home')">Home</x-navlink>
    <x-navlink href="{{route('enchanters.index')}}" :active="request()->is('enchanterpage')">Enchanters</x-navlink>
    <x-navlink href="{{route('subclasses.index')}}" :active="request()->is('subclasspage')">Enchanter subclasses</x-navlink>
    <x-navlink href="{{route('contact')}}" :active="request()->is('contact')">Contact</x-navlink>

    @auth
        <a href="{{ url('new-dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Dashboard</a>
    @else
        <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Register</a>
        @endif
    @endauth
    @if (auth()->check() && auth()->user()->role === 1)
        <a href="{{ url('admin') }}">Admin page</a>
    @endif 
</nav>
