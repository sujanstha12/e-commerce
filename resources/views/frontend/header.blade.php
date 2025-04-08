<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Need help? Call us: +123456789</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Language
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Nepali</a></li>
                        <li><a class="dropdown-item" href="#">Hindi</a></li>
                        <li><a class="dropdown-item" href="#">English</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Currency
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">NRS</a></li>
                        <li><a class="dropdown-item" href="#">$USD</a></li>
                        <li><a class="dropdown-item" href="#">INR</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>



<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">eStore</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <form class="d-flex mx-auto" role="search">
            <input class="form-control me-2 px-5" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bx bx-user usericon"></i>
            </a>
            @if(Auth::guard('customer')->user())
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('profiles') }}">
                        <i class="bi bi-person"></i> My Profile {{ Auth::guard('customer')->user()->name }}
                    </a></li>
                    <li><a class="dropdown-item" href="{{ route('myorder') }}"><i class="bi bi-bag-check"></i> My Order</a></li>
                    <li><a class="dropdown-item" href="{{ route('mywishlist') }}"><i class="bi bi-heart"></i> My Wishlist</a></li>
                    <li><a class="dropdown-item" href="{{ route('mysetting') }}"><i class="bi bi-gear"></i> Setting</a></li>
                    <li>

                        <form action="{{ route('customer.logout') }}" method="post">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Sign Out</button>
                        </form>

                    </li>
                    <li><hr class="dropdown-divider"></li>
                </ul>
            @else
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('customer.registerPage') }}"><i class="bi bi-person"></i> Register</a></li>
                    <li><a class="dropdown-item" href="{{ route('customer.loginPage') }}"><i class="bi bi-person"></i> Login</a></li>
                </ul>
            @endif
        </div>



    </div>

    <box-icon name='heart' class="hearticon"></box-icon>
    <box-icon name='cart' class="carticon"></box-icon>
    </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active1" aria-current="page" href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active2" aria-current="page" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active3" aria-current="page" href="{{ route('category') }}">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active4" aria-current="page" href="{{ route('product') }}">Product
                        Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active5" aria-current="page" href="{{ route('cart') }}">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active6" aria-current="page" href="{{ route('checkout') }}">Checkout</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('dropdown') }}">dropdown1</a></li>

                    </ul>
                </li>

            </ul>

        </div>
    </div>
</nav>
