<ul class="nav d-flex flex-column admin_menu">
    <li class="nav-item" id="li_categories">
        <a class="nav-link" href="{{ route('admin.home') }}"> Home </a>
    </li>
    <!-- Dropdown -->
    <li class="nav-item" id="li_categories">
        <a style="display: inline-block" class="nav-link dropdown" href="{{ route('category.index') }}">
            Categories
        </a>
        {{-- <a style="display: inline-block" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"></a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('category.create') }}">Create</a>
            <a class="dropdown-item" href="{{ route('category.index') }}">List all</a>
        </div> --}}

    </li>
    <!-- Dropdown -->
    <li class="nav-item" id="li_books">
        <a style="display: inline-block" class="nav-link dropdown" href="#">
            Books
        </a>
        <{{-- a style="display: inline-block" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"></a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('book.create') }}">Upload</a>
            <a class="dropdown-item" href="#">List all</a>
        </div> --}}

    </li>

    <!-- Dropdown -->
    <li class="nav-item" id="li_students">
        <a style="display: inline-block" class="nav-link dropdown" href="#">
            Students
        </a>
        {{-- <a style="display: inline-block" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"></a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Register</a>
            <a class="dropdown-item" href="#">List all</a>
        </div>
 --}}
    </li>

</ul>