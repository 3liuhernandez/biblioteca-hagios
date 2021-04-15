@foreach($category as $key )
    @php $section_title = $key->name @endphp
@endforeach

@extends('layouts.app')

@section('title_section', "Categoria: $section_title " )

@section('content')



<div class="row d-flex flex-row w-100" style="margin-top:30px">
    <div class="container-fluid d-flex flex-wrap">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="col-md-2 card m-0 p-0 ml-4 flex-column">
            <div class="card-header">
                <strong> Sub Categorias </strong>
            </div>
            <ul class="list-group list-group-flush d-flex flex-column flex-wrap">
                @foreach($category as $key )
                    @foreach ($key->subcategories as $subcategory)
                        <a href="{{ route('sub_category.show.guest', $subcategory->id)}}" class="list-group-item list-group-item-action">
                            <b>{{ $subcategory->name }}</b>
                        </a>
                    @endforeach
                @endforeach
            </ul>
        </div>
        <div class="col-md-9 ml-4">
            <div class="d-flex flex-column">
                @foreach($category as $key )
                    @foreach ($key->subcategories as $subcategory)
                        @if( count($subcategory->books) > 0)
                        <div class="card d-flex flex-column mb-4">
                            <p class="card-title display-4 p-4"> {{ $key->name }}</p>
                            <div class="card-body d-flex flex-wrap">
                                @foreach($subcategory->books as $book)
                                <div class="col-md-2 mb-4 mr-2 d-flex align-self-stretch">
                                    <div class="card">
                                        <div class="card-header">
                                            <img src="{{ asset('img/books/') }}">
                                        </div>
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <h5 class="card-title">{{$book->name}}</h5>
                                            <p class="card-text">{{$book->description}}</p>
                                            <a href="#" class="text-primart p-2">download</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection