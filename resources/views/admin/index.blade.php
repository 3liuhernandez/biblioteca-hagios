@extends('layouts.admin')

@section('title_section', 'Home')

@section('content')
<div class="container-fluid">
    <div class="d-flex flex-column">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="d-flex flex-wrap flex-column card mb-4">
            <div class="card-header">
                <h1 class="text-primary"> Categories </h1>
            </div>
            <div class="card-body">
                <div class="d-flex flex-wrap flex-column">
                    <ul class="list-group">
                    @foreach ($categories as $category)
                        <li
                        class="list-group-item d-flex justify-content-between align-items-center"
                        data-category="{{ $category->id }}"
                        >
                            {{ $category->name }}
                            <span class="badge badge-primary badge-pill">12</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column mt-4 card">
            <div class="card-header">
                <h1 class="text-primary"> Users </h1>
            </div>
            <div class="card-body">
                <div class="container-fluid d-flex flex-wrap">
                    <h3 class=""> Stundents </h3>
                    <table class="table table-bordered table-hover table-responsive small">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            {{-- <th>Role</th> --}}
                            <th>Created At</th>
                            <th>Update At</th>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                @if($user->role > 0)
                                    <tr>
                                        <td> {{ $user->id }} </td>
                                        <td> {{ $user->name }} </td>
                                        <td> {{ $user->email }} </td>
                                        <td> {{ $user->password }} </td>
                                        {{-- <td> {{ $user->role }} </td> --}}
                                        <td> {{ $user->created_at }} </td>
                                        <td> {{ $user->updated_at }} </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer">
                <div class="container-fluid d-flex flex-wrap">
                    <h3 class=""> Admins </h3>
                    <table class="table table-bordered table-hover table-dark table-responsive small">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            {{-- <th>Role</th> --}}
                            <th>Created At</th>
                            <th>Update At</th>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                @if($user->role < 1)
                                    <tr>
                                        <td> {{ $user->id }} </td>
                                        <td> {{ $user->name }} </td>
                                        <td> {{ $user->email }} </td>
                                        <td> {{ $user->password }} </td>
                                        {{-- <td> {{ $user->role }} </td> --}}
                                        <td> {{ $user->created_at }} </td>
                                        <td> {{ $user->updated_at }} </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
