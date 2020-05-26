@extends('site')

@section('content')
    <div class="col-12">
        <h1 class="m-2">Maak post</h1>
        <form method="POST" action="{{route('blog.update', $post->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group" for="title">
                <label class="label">Title</label>
                <input name="title" class="form-control @error('title') border-warning @enderror"
                       type="text" placeholder="Titel" value="{{$post->title}}">
                @error('title')
                <p class="text-warning">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label class="label" for="writer">Auteur</label>
                <input name="writer" class="form-control @error('title') border-warning @enderror"
                       type="text" placeholder="Auteur" value="{{$post->writer}}">
                @error('writer')
                <p class="text-warning">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label class="label" for="body">Post</label>
                <textarea class="form-control @error('title') border-warning @enderror" name="body" id="body"
                          placeholder="Post" rows="10">{{$post->body}}</textarea>
                @error('body')
                <p class="text-warning">{{ $message }}</p>
                @enderror
            </div>

            <div class="row m-3">
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                <div class="col text-center">
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
                <div class="col text-center">
                    <a type="button" href="/" class="btn btn-danger">Cancel</a>
                </div>
            </div>

        </form>
    </div>
@endsection
