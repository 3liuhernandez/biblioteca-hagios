@extends('layouts.admin')

@section('title_section', 'Home')

@section('content')
<div class="container-fluid">
    <div class="d-flex">
        <div class="d-flex flex-wrap m4">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            @php
                #dd($left)
            @endphp

            @foreach($categories as $key )
                {{--  <div class="d-flex flex-column m-2 p-2" style="order: {{ $key->id }}">
                    <h2> {{ $key->id }}. {{ $key->name }} </h2>
                    <h5> {{ $key->description }} </h5>
                    <div class="fakeimg">Fake Image</div>
                    <p>
                        {{ $key->user_id }}
                        {{ $key->created_at }}
                    </p>
                </div>  --}}

                <div class="card mt-4 ml-4">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $key->name }}</h5>
                        <p class="card-text">{{ $key->description }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Add News Sub Cat</a>
                        <a href="#" class="card-link">Check</a>
                    </div>
                </div>
            @endforeach

            {{--  <div
                class="d-flex col-md-3 flex-wrap flex-column mb-4"
                data-category="{{ $category->id }}">
                    <div class="fakeimg">Fake Image</div>
                    <h2> {{ $category->id }}. {{ $category->name }} </h2>
                    <h5> {{ $category->description }} </h5>
                    <p> {{ $category->created_at }} By {{ $category->user_id }} </p>
                    <p> {{ $category->updated_at }} </p>
            </div>  --}}
        </div>
    </div>
</div>

@endsection
