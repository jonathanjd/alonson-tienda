<nav class="navbar is-link is-transparent ">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ route('tienda') }}">
                <i class="fas fa-store-alt fa-4x"></i>
            </a>
            <div class="navbar-burger burger" data-target="navbarBurger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="navbarBurger" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="{{ route('tienda') }}">
                    HOME
                </a>

                @foreach ($categories as $category)
                <a class="navbar-item" href="{{ route('categories.show', $category) }}">
                    {{ $category->title }}
                </a>
                @endforeach
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="field is-grouped">
                        <p class="control">
                            <a class="button is-primary" href="{{ route('carrito') }}">
                                <span class="icon">
                                    <i class="fas fa-shopping-cart"></i>
                                </span>
                                <span>MI CARRITO {{ $productCount }}</span>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="#">
                        <i class="fas fa-user m-r-sm"></i>{{ Auth::guard('user-ecommerce')->guest() ? 'User' : Auth::guard('user-ecommerce')->user()->name }}
                    </a>
                    @if (Auth::guard('user-ecommerce')->guest())
                        <div class="navbar-dropdown is-boxed">
                            <a class="navbar-item" href="{{ route('login') }}">
                                Login
                            </a>
                            <a class="navbar-item" href="{{ route('register') }}">
                                Register
                            </a>
                        </div>
                    @else
                        <div class="navbar-dropdown is-boxed">
                            <a class="navbar-item" href="{{ route('dashboard') }}">
                                Dashboard
                            </a>
                            <hr class="navbar-divider">
                            <a class="navbar-item" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</nav>
