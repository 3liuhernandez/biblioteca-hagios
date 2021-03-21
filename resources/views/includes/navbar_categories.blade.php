<nav class="navbar navbar-expand-sm bg-dark navbar-dark categories">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        @foreach($categories as $key)
            <li class="nav-item">
                <a class="nav-link" href="#">{{ $key->name }}</a>
            </li>
        @endforeach
    </div>
</nav>