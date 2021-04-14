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

<div class="d-flex flex-row w-100 bg-primary bg-dark sticky-top justify-content-between">
    <nav class="navbar navbar-expand-sm navbar-dark ">
        <!-- Brand -->
        <a class="navbar-brand" href="{{ route('category.index.guest') }}">Categories :: </a>

        <!-- Links -->
        <ul class="navbar-nav d-flex">
            @foreach($categories as $key)
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                        {{ $key->name }}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('category.show.guest', $key->id) }}">
                            Todas
                        </a>
                        <div class="dropdown-divider"></div>
                        @foreach ($key->subcategories as $subcategory)
                        <a class="dropdown-item" href="{{ route('category.show.guest', $subcategory->id) }}"> {{ $subcategory->name }} </a>
                        @endforeach
                    </div>
                </li>
            @endforeach

        </ul>
    </nav>
    <form class="form-inline mr-4" action="/action_page.php">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-success" type="submit">Search</button>
    </form>
</div>