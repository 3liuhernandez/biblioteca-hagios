@extends('layouts.admin')

@section('title_section', 'Home')

@section('content')
<div class="container-fluid">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="d-flex">
        <div class="d-flex flex-wrap m4">

            @php
                #dd($left)
            @endphp

            @foreach($categories as $key )

                <div class="card mt-4 ml-4">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-header">
                        <h5 class="card-title">{{ $key->name }}</h5>
                        <p class="card-text">{{ $key->description }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                    </ul>
                    <div class="card-footer">
                        <a
                        href="#"
                        class="card-link"
                        data-toggle="collapse"
                        data-target="#form-{{ $key->id }}"
                        >Add News Sub Cat</a>
                        <a href="#" class="card-link">Check</a>
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
