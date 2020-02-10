@extends('layouts.app')

@section('content')
    <div class="container">

        @include('partial.error')

        <div class="row">
            <div class="col-md-offset-4 col-md-4">

                <form method="post" action="{{ route('post.update', ['id' => $post->id]) }}">
                    {{ csrf_field() }}
                    {{ method_field('put') }}

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" />
                    </div>

                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea class="form-control" id="body" name="body" >{{ $post->body }}</textarea>
                    </div>

                    <input type="submit" value="Submit" class="btn btn-success" />
                </form>

            </div>
        </div>
    </div>
@endsection