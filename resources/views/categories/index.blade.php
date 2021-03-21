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
            @foreach($categories as $key )
                <div class="d-flex flex-column m-2 p-2" style="order: {{ $key->id }}">
                    <h2> {{ $key->id }}. {{ $key->name }} </h2>
                    <h5> {{ $key->description }} </h5>
                    <div class="fakeimg">Fake Image</div>
                    <p>
                        {{ $key->user_id }}
                        {{ $key->created_at }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
