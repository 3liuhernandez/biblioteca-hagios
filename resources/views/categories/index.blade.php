@extends('layouts.admin')

@section('title_section', 'Home')

@section('content')
<div class="container-fluid">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="d-flex flex-column">
        <div class="d-flex flex-row container-fluid flex-wrap bg-primary bg-dark sticky-top mt-4">
            <nav class="navbar navbar-expand-sm navbar-dark row">
                <!-- Brand -->
                <a class="navbar-brand" href="#">Categories :: </a>

                <!-- Links -->
                <ul class="navbar-nav row d-flex">
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="openNav('categories_side', 'width')">Add New</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="openNav('sub_categories_side', 'width')">Link 2</a>
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
                    </li>

                    <form class="form-inline float-right" action="/action_page.php">
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
        <div class="d-flex flex-row flex-wrap m4 d-flex">
            @foreach($categories as $key )
                @php $books_cat = 0; @endphp

                @foreach ($key->subcategories as $subcategory)
                    @php $books_cat += count($subcategory->books) @endphp
                @endforeach

                <div class="card mt-4 ml-4">
                    <div class="card-header">
                        <b class="card-title d-flex justify-content-between align-items-center">
                            {{ $key->name }} &nbsp;&nbsp;
                            <span class="badge badge-pill badge-dark small">
                                {{ $books_cat }} Books
                            </span>
                        </b>
                        <p class="card-text text-success">{{ $key->description }}</p>
                    </div>
                    <ul class="list-group list-group-flush sub_cat_list">
                        @foreach ($key->subcategories as $subcategory)
                            <div class="d-flex justify-content-between">
                                <a href="subcategory/{{$subcategory->id}}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                    {{ $subcategory->name }}
                                    <span class="badge badge-secondary right small">
                                        {{ count($subcategory->books) }} Books
                                    </span>
                                </a>
                                <span class="fa fa-upload btn text-info border-info border-left-0 border-right-0 border-bottom-0" onclick="openNav('upload_book_side', 'height', {{ $subcategory->id }}, '{{ $subcategory->name }}')"></span>
                            </div>
                        @endforeach
                    </ul>
                    <div class="card-footer">
                        <a href="#" class="card-link" onclick="openNav('sub_categories_side', 'width', {{ $key->id }}, '{{ $key->name }}')">
                            Add News Sub Cat
                        </a>
                        <a href="#" class="card-link">
                            Check
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


<div id="categories_side" class="sidenav sidenav-right">
    <a href="javascript:void(0)" class="closebtn text-danger" onclick="closeNav('categories_side', 'width')">&times;</a>
    <div class="card">
        <form method="POST" action="{{ route('category.store') }}">
            @csrf
            <div class="card-header">
                <b>Making a new Category</b>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>

                    <div class="col-md-6">
                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autocomplete="description" autofocus>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

            <div class="card-footer">
                <div class="form-group row mb-0 d-flex justify-content-around">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                    <button type="button" class="btn btn-danger" onclick="closeNav('categories_side', 'width')">
                        {{ __('Cancel') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="sub_categories_side" class="sidenav sidenav-right">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav('sub_categories_side', 'width')">&times;</a>
    <form action="{{ route('subcategory.store')}}" method="POST">
        @csrf
        <div class="card">
            <div class="card-header">
                Making a new Sub Categorie for: <b id="sidenav_category_name"></b>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-md-6">
                        <input id="category_id" type="hidden" class="form-control @error('category_id') is-invalid @enderror" name="category_id" value="{{ old('category_id') }}" required autocomplete="category_id" autofocus>

                        @error('category_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>

                    <div class="col-md-6">
                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autocomplete="description" autofocus>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="form-group row mb-0 d-flex justify-content-around">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                    <button type="button" class="btn btn-danger" onclick="closeNav('sub_categories_side', 'width')">
                        {{ __('Cancel') }}
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

<div id="upload_book_side" class="sidenav sidenav-bottom">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav('upload_book_side', 'height')">&times;</a>
    <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card w-75 text-center m-auto">
            <div class="card-header">
                Uploading a new Book for: <b id="sidenav_category_name" class="display-4"></b>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="sub_category_id" class="col-md-4 col-form-label text-md-right">{{ __('sub_category_id') }}</label>

                    <div class="col-md-6">
                        <input id="category_id" type="hidden" class="form-control @error('sub_category_id') is-invalid @enderror" name="sub_category_id" value="{{ __('1') }}" required autocomplete="sub_category_id" autofocus>

                        @error('sub_category_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="book" class="col-md-4 col-form-label text-md-right">{{ __('book') }}</label>

                    <div class="col-md-6">
                        <input id="book" type="file" class="form-control @error('book') is-invalid @enderror" name="book" value="{{ old('book') }}" required autocomplete="book" autofocus>

                        @error('book')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>

                    <div class="col-md-6">
                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autocomplete="description" autofocus>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <div class="form-group row mb-0 d-flex justify-content-around">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                    <button type="button" class="btn btn-danger" onclick="closeNav('upload_book_side', 'height')">
                        {{ __('Cancel') }}
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
