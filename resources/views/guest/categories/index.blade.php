@extends('layouts.app')

@section('title_section', 'Categories')

@section('content')
<div class="row d-flex flex-row w-100" style="margin-top:30px">
    <div class="container-fluid d-flex flex-column flex-wrap">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="col-md-10 m-auto">
            <div class="d-flex flex-row flex-wrap m4 d-flex flex-column">
                @foreach($categories as $key )
                    @php $books_cat = 0; @endphp

                    @foreach ($key->subcategories as $subcategory)
                        @php $books_cat += count($subcategory->books) @endphp
                    @endforeach
    
                    <div class="card m-4">
                        <div class="card-header">
                            <a href="{{ route('category.show.guest', $key->id) }}">
                                <b class="card-title d-flex justify-content-between align-items-center">
                                    {{ $key->name }} &nbsp;&nbsp;
                                    <span class="badge badge-pill badge-dark small">
                                        {{ $books_cat }} Books
                                    </span>
                                </b>
                            </a>
                            <p class="card-text text-success">{{ $key->description }}</p>
                        </div>
                        <div class="card-body">
                            <div class="list-group list-group-horizontal">
                                @foreach ($key->subcategories as $subcategory)
                                <a href="#" class="list-group-item list-group-item-action"> {{ $subcategory->name }} </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection