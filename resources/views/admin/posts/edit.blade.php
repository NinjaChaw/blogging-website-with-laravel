@extends('layouts.app')


@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">

        <div class="panel-heading">
            Update post: {{ $post->title }}
        </div>

        <div class="panel-body">
            <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="{{ $post->title }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="featured">Featured image</label>
                    <input type="file" name="featured" class="form-control">
                </div>

                <div class="form-group">
                    <label for="category">Select a category</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                                    @if($post->category->id == $category->id)
                                        selected
                                    @endif
                            >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="tags">Select tags</label>
                    <div class="checkbox">
                        @foreach($tags as $tag)
                            <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}"

                                          @foreach($post->tags as $t)
                                              @if($tag->id == $t->id)
                                                  checked
                                              @endif
                                          @endforeach

                                >{{ $tag->tag }}</label>
                            <br>
                        @endforeach
                    </div>
                </div>

                <div class="form-group">
                    <label for="content">Title</label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control">{{ $post->content }}</textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Update post</button>
                    </div>

                </div>
            </form>
        </div>

    </div>

@endsection