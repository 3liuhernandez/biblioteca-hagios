{{--  <nav class="navbar navbar-expand-sm bg-dark navbar-dark categories">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav d-flex">
        @foreach($categories as $key)
            <li class="nav-item">
                <a class="nav-link" href="#">{{ $key->name }}</a>
            </li>
        @endforeach
        </ul>
    </div>
</nav>  --}}

<div class="d-flex flex-row flex-wrap bg-primary bg-dark sticky-top">
    <nav class="navbar navbar-expand-sm navbar-dark ">
        <!-- Brand -->
        <a class="navbar-brand" href="#">Categories :: </a>

        <!-- Links -->
        <ul class="navbar-nav d-flex">
            @foreach($categories as $key)
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ $key->name }}</a>
                </li>
            @endforeach
            {{--  <li class="nav-item">
                <a class="nav-link" href="#">Add New</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link 2</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Dropdown link
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Link 1</a>
                    <a class="dropdown-item" href="#">Link 2</a>
                    <a class="dropdown-item" href="#">Link 3</a>
                </div>
            </li>  --}}

            <form class="form-inline mr-auto" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
        </ul>
    </nav>
    {{--  Horizontal List Groups
    <ul class="list-group list-group-horizontal">
        <li class="list-group-item">First item</li>
        <li class="list-group-item">Second item</li>
        <li class="list-group-item">Third item</li>
        <li class="list-group-item">Fourth item</li>
    </ul>  --}}
</div>