<nav class="navbar navbar-expand-lg" style="background: #F4DCD6">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="img/logo2.png" width="56" height="45"
                alt=""><strong>CookingMaster</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }} loginHover" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'categories' ? 'active' : '' }} loginHover"
                        href="/categories">Category</a>
                </li>
                <li class="nav-item dropdown">
                </li>
            </ul>
            <ul class="navbar-nav mb-2 me-5 mb-lg-0">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/dashboard">
                                    <i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="bi bi-box-arrow-right"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link {{ $active === 'login' ? 'active' : '' }}">
                            <i class="bi bi-box-arrow-in-right"></i> Login
                        </a>
                    </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>
