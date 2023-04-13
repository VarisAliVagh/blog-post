<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="/images/primary-logo.webp" alt="primary-logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @if(session()->has('id'))
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/post">Create</a>
          </li>
          <li>
            <a class="nav-link" href="/logout">Logout</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">Register</a>
          </li>
        @endif
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>  