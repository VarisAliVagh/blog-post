<div class="container text-center py-3">
    <img src="/images/primary-logo.png" alt="primary-logo" height="30" width=""><br>
    <h5 class="mt-1 text-secondary">NEWS HUB</h5>
</div>
<nav class="navbar bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="mb-0 d-flex list-unstyled align-items-center">
            @if (session()->has('userId'))
                <li class="nav-item me-3">
                    <a class="nav-link active" aria-current="page" href="/">HOME</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="/business">BUSINESS</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="/health">HEALTH</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="/lifestyle">LIFESTYLE</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="/politics">POLITICS</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="/sciTech">SCI-TECH</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="/sports">SPORTS</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="/post">CREATE POST</a>
                </li>
                <li class="nav-item me-3">
                    <a href="/"><img src="/images/trash.png" alt="" height="40" width="40"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">LOGOUT</a>
                </li>
            @else
                <li class="nav-item me-3">
                    <a class="nav-link" href="/login">LOGIN</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="/register">REGISTER</a>
                </li>
            @endif

        </ul>
        @if (session()->has('userId'))
            <form action="" class="d-flex" role="search">
                <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success">Search</button>
            </form>
        @endif
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <img src="/images/primary-logo.png" alt="primary-logo" height="30" width=""><br>
                <h5 class="text-secondary">NEWS HUB</h5>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    @if (session()->has('userId'))
                        <li class="border-bottom nav-item">
                            <a class="nav-link active" aria-current="page" href="/">HOME</a>
                        </li>
                        <li class="border-bottom nav-item">
                            <a class="nav-link" href="/business">BUSINESS</a>
                        </li>
                        <li class="border-bottom nav-item">
                            <a class="nav-link" href="/health">HEALTH</a>
                        </li>
                        <li class="border-bottom nav-item me-3">
                            <a class="nav-link" href="/lifestyle">LIFESTYLE</a>
                        </li>
                        <li class="border-bottom nav-item me-3">
                            <a class="nav-link" href="/politics">POLITICS</a>
                        </li>
                        <li class="border-bottom nav-item me-3">
                            <a class="nav-link" href="/sciTech">SCI-TECH</a>
                        </li>
                        <li class="border-bottom nav-item me-3">
                            <a class="nav-link" href="/sports">SPORTS</a>
                        </li>
                        <li class="border-bottom nav-item me-3">
                            <a class="nav-link" href="/post">CREATE POST</a>
                        </li>
                        <li class="border-bottom nav-item me-3">
                            <a class="nav-link" href="/logout">LOGOUT</a>
                        </li>
                    @else
                        <li class="border-bottom nav-item me-3">
                            <a class="nav-link" href="/login">LOGIN</a>
                        </li>
                        <li class="border-bottom nav-item me-3">
                            <a class="nav-link" href="/register">REGISTER</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>
