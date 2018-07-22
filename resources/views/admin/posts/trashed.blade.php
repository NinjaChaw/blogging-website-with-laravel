@extends('layouts.app')


@section('content')

    <div class="panel panel-default">

        <div class="panel-heading">
            Al trashed posts
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
                    Restore
                </th>

                <th>
                    Destroy
                </th>

                </thead>

                <tbody>

                @if($posts->count() > 0)

                    @foreach($posts as $post)
                        <tr>

                            <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" height="50" width="100"></td>

                            <td>{{ $post->title }}</td>

                            <td>Edit</td>

                            <td>
                                <a href="{{ route('post.restore', $post->id) }}" class="btn btn-xs btn-success">Restore</a>
                            </td>

                            <td>
                                <a href="{{ route('post.kill', $post->id) }}" class="btn btn-xs btn-danger">Delete</a>
                            </td>

                        </tr>
                    @endforeach

                @else
                    <tr>
                        <th colspan="5" class="text-center">Empty trash box</th>
                    </tr>

                @endif

                </tbody>

            </table>

        </div>
    </div>

@stop