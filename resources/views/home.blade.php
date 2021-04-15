@extends('layouts.app')

@section('title_section', 'Home')

@section('content')
<div class="container-fluid" style="margin-top:30px">
    <div class="row d-flex justify-content-center">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="container-fluid d-flex flex-row flex-wrap p-4">
            @foreach($categories as $category )

                @php
                    /* $get_cat = array_column($categories, 'subcategory');
                    $title_category = array_keys($get_cat);
                    $title_cat = $title_category[0];
                    $id_category = array_values($get_cat);
                    $id_cat = $id_category[0]; */

                @endphp

                @foreach ($category->subcategories as $subcategory)
                    @if( count($subcategory->books) > 0)
                        @foreach($subcategory->books as $book)
                            <div class="col-md-3 border p-4 m-2 col-sm-4 col-xs-6 mb-4 d-flex">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel-body d-flex flex-column justify-content-between">
                                            <h5 class="panel-title">{{$book->name}}</h5>
                                            <p class="panel-text">{{$book->description}}</p>
                                            <a href="#" class="text-primart p-2">download</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{ asset('img/books/portada.jpg') }}" style="width: 200px; height: 200px;">
                                    </div>
                                    <div class="col-md-12 list-group mt-2 d-flex flex-wrap">
                                        <a href="#" class="list-group-item"> Categoria </a>
                                        <a href="#" class="list-group-item"> Sub categoria </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endforeach
            @endforeach
        </div>
    </div>
</div>

@endsection
