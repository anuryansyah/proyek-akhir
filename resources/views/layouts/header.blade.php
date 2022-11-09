<div class="container-fluid">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/">Beranda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('person.index') }}">Person</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Person
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="{{ route('person.index') }}">Data</a></li>
          <li><a class="dropdown-item" href="{{ route('person.create') }}">Tambah Person</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div>
    <ul class="navbar-nav mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="/login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="/register">Register</a>
      </li>
    </ul>
  </div>
</div>