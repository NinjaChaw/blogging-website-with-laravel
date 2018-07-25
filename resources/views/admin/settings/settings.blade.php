@extends('layouts.app')


@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">

        <div class="panel-heading">
            Edit blog settings
        </div>

        <div class="panel-body">
            <form action="{{ route('setting.update') }}" method="post">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="site_name">Site name</label>
                    <input type="text" name="site_name" value="{{ $setting->site_name }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="contact_number">Contact phone</label>
                    <input type="text" name="contact_number" value="{{ $setting->contact_number }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="contact_email">Contact email</label>
                    <input type="text" name="contact_email" value="{{ $setting->contact_email }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" value="{{ $setting->address }}" class="form-control">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Update site settings</button>
                    </div>
                </div>
            </form>
        </div>

    </div>

@endsection



@section('styles')

    <!-- summernote css -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">

@endsection



@section('scripts')

    <!-- summernote js -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>

@endsection