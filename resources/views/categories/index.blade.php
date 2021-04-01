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
        <div class="d-flex flex-row flex-wrap bg-primary bg-dark sticky-top">
            <nav class="navbar navbar-expand-sm navbar-dark ">
                <!-- Brand -->
                <a class="navbar-brand" href="#">Categories :: </a>

                <!-- Links -->
                <ul class="navbar-nav d-flex">
                    <li class="nav-item">
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
                    </li>

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
        <div class="d-flex flex-row flex-wrap m4 d-flex">

            @foreach($categories as $key )
                @php $books_cat = 0; @endphp

                @foreach ($key->subcategories as $subcategory)
                    @php $books_cat += count($subcategory->books) @endphp
                @endforeach

                <div class="card mt-4 ml-4 flex-fill">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-header">
                        <b class="card-title d-flex justify-content-between align-items-center">
                            {{ $key->name }}
                            <span class="badge badge-pill badge-dark small">
                                {{ $books_cat }} Books
                            </span>
                        </b>
                        <p class="card-text">{{ $key->description }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($key->subcategories as $subcategory)
                            <a href="subcategory/{{$subcategory->id}}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                {{ $subcategory->name }}
                                <span class="badge badge-secondary right small">
                                    {{ count($subcategory->books) }} Books
                                </span>
                            </a>
                        @endforeach
                    </ul>
                    <div class="card-footer">
                        <a
                        href="#"
                        class="card-link"
                        data-toggle="collapse"
                        data-target="#form-{{ $key->id }}"
                        >Add News Sub Cat</a>

                        <a href="#" class="card-link">
                            Check
                        </a>

                        <div class="card-footer collapse" id="form-{{ $key->id }}">
                            <form action="{{ route('subcategory.store')}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <input id="category_id" type="hidden" class="form-control @error('category_id') is-invalid @enderror" name="category_id" value="{{ $key->id }}" required autocomplete="category_id" autofocus>
        
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
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
