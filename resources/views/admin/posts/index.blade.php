@extends('layouts.app')


@section('content')

    <div class="panel panel-default">

        <div class="panel-heading">
            Published posts
        </div>

        <div class="panel-body">

            <table class="table table-hover">

                <thead>

                <th>
                    Image
                </th>

                <th>
                    Title
                </th>

                <th>
                    Edit
                </th>

                <th>
                    Trash
                </th>

                </thead>

                <tbody>

                    @if($posts->count() > 0)

                        @foreach($posts as $post)
                            <tr>

                                <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" height="50" width="90"></td>

                                <td>{{ $post->title }}</td>

                                <td>
                                    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-xs btn-success">Edit</a>
                                </td>

                                <td>
                                    <a href="{{ route('post.delete', $post->id) }}" class="btn btn-xs btn-danger">Trash</a>
                                </td>

                            </tr>
                        @endforeach

                    @else
                        <tr>
                            <th colspan="5" class="text-center">No post Created</th>
                        </tr>

                    @endif

                </tbody>

            </table>

        </div>
    </div>

@stop