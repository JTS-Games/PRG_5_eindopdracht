<nav class="-mx-3 flex flex-1 justify-end">
    <x-navlink href="{{route('home')}}" :active="request()->is('home')">Home</x-navlink>
    <x-navlink href="{{route('enchanters.index')}}" :active="request()->is('enchanterpage')">Enchanters</x-navlink>
    <x-navlink href="{{route('contact')}}" :active="request()->is('contact')">Contact</x-navlink>

    @auth
        <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Dashboard</a>

    @else
        <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Register</a>
        @endif
    @endauth
