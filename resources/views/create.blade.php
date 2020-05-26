@extends('site')

@section('content')
    <div class="col-12">
        <h1 class="m-2">Maak post</h1>
        <form method="POST" action="/blog">
            @csrf
            <div class="form-group" for="title">
                <label class="label">Title</label>
                <input name="title" class="form-control @error('title') border-danger @enderror"
                       type="text" placeholder="Titel" value="{{old('title')}}">
                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label class="label" for="writer">Auteur</label>
                <input name="writer" class="form-control @error('title') border-danger @enderror"
                       type="text" placeholder="Auteur" value="{{old('writer')}}">
                @error('writer')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label class="label" for="body">Post</label>
                <textarea class="form-control @error('title') border-danger @enderror" name="body" id="body"
                          placeholder="Post" rows="10">{{old('body')}}</textarea>
                @error('body')
                <p class="text-danger">{{ $message }}</p>
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
