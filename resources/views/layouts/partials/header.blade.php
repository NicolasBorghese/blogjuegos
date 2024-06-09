<header>
        <div class="flex items-center justify-center h-36 bg-gradient-to-r from-blue-950 to-red-950">
            <h1 class="text-white text-4xl font-bold">blogJuegos</h1>
        </div>
    <nav >
        <ul  class="flex items-center">
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            </li>
            <li><a href="{{ route('noticias.index') }}" class="{{ request()->routeIs('noticias.*') ? 'active' : '' }}">Noticias</a>
            </li>
            <li><a href="{{ route('reviews.index') }}" class="{{ request()->routeIs('reviews.*') ? 'active' : '' }}">Reviews</a>
            </li>
        </ul>
    </nav>
</header>
