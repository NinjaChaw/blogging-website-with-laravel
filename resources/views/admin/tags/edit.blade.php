@extends('layouts.app')


@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">

        <div class="panel-heading">
            Edit tag: {{ $tag->tag }}
        </div>

        <div class="panel-body">

            <form action="{{ route('tag.update', $tag->id) }}" method="post">

                {{csrf_field()}}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="tag" value="{{ $tag->tag }}" class="form-control">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Edit tag</button>
                    </div>
                </div>

            </form>

        </div>

    </div>

@endsection