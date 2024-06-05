<nav class="navbar bg-light pb-2 bg-opacity-50">
    <div class="container">
      <a class="navbar-brand  text-light">NimeKuro</a>
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link text-light {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{ route('client.index') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{ route('client.list') }}">Daftar Anime</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Disabled</a>
        </li>
      </ul>

    </div>
</nav>


