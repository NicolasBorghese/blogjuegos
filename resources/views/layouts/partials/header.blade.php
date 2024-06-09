<header>
        <div class="flex items-center justify-center h-36 bg-gradient-to-r from-blue-950 to-red-950">
            <h1 class="text-white text-4xl font-bold">blogJuegos</h1>
        </div>
</header>
<nav class="bg-slate-800 px-10 py-6 text-white w-full">
    <ul  class="flex items-center">
        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }} mr-2">HOME</a>
        </li>
        <li><a href="{{ route('noticias.index') }}" class="{{ request()->routeIs('noticias.*') ? 'active' : '' }} mr-2">NOTICIAS</a>
        </li>
        <li><a href="{{ route('reviews.index') }}" class="{{ request()->routeIs('reviews.*') ? 'active' : '' }} mr-2">REVIEWS</a>
        </li>
    </ul>
</nav>
