@extends('layouts.app')

@section('content')

    <div class="col-lg-3">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                Published Posts
            </div>
            <div class="panel-body">
                <h2 class="text-center">{{ $posts_count }}</h2>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="panel panel-danger">
            <div class="panel-heading text-center">
                Trashed Posts
            </div>
            <div class="panel-body">
                <h2 class="text-center">{{ $trashed_count }}</h2>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="panel panel-success">
            <div class="panel-heading text-center">
                Users
            </div>
            <div class="panel-body">
                <h2 class="text-center">{{ $users_count }}</h2>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                Categories
            </div>
            <div class="panel-body">
                <h2 class="text-center">{{ $categories_count }}</h2>
            </div>
        </div>
    </div>

@endsection