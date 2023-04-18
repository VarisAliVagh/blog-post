<div class="container text-center py-3">
  <img src="/images/primary-logo.png" alt="primary-logo" height="30" width=""><br>
  <h5 class="mt-1 text-secondary">NEWS HUB</h5>
</div>

{{-- <nav class="navbar bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Offcanvas navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav> --}}


<nav class="navbar bg-light">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
      <ul class="mb-0 d-flex list-unstyled">
        @if(session()->has('id'))
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
            <a class="nav-link" href="/post">CREATE BLOG</a>
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
      @if(session()->has('id'))
        <form action="" class="d-flex" role="search">
          <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success">Search</button>
        </form>
      @endif
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
          <img src="/images/primary-logo.png" alt="primary-logo" height="30" width=""><br>
          <h5 class="text-secondary">NEWS HUB</h5>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          @if(session()->has('id'))
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
              <a class="nav-link" href="/post">CREATE BLOG</a>
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
