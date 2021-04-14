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
        <div class="col-md-2">
            <ul class="nav bg-light d-flex flex-column sub_categories">
                @foreach($category as $key )
                    <strong> {{ $key->name }} </strong>
                    @foreach ($key->subcategories as $subcategory)
                        <li class="nav-item">
                            <a href="#" class="nav-link m-1"> {{ $subcategory->name }} </a>
                        </li>
                    @endforeach
                @endforeach
            </ul>
        </div>
        <div class="col-md-10">
            <div class="d-flex flex-row flex-wrap m4 d-flex flex-column">
                @foreach($category as $key )
    
                    <div class="card m-4">
                        <div class="card-header">
                            <a href="{{ route('category.show.guest', $key->id) }}">
                                <b class="card-title d-flex justify-content-between align-items-center">
                                    {{ $key->name }}
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