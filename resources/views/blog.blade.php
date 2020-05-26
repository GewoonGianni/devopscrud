@extends('site')

@section('content')
    <div class="">
        <!-- make post button -->
        <div class="col-12 m-2">
            <p class="btn btn-primary float-right">
                <a class="text-light" href="/blog/create">Nieuwe post</a>
            </p>
        </div>

        <h1 class="m-2">Welkom op dit blog</h1>

        <!-- posts -->
        @foreach($blog as $post)

            <div class="col-12">
                <hr>
                <h3>{{$post->title}}</h3>
                <p>{{$post->body}}</p>
                <div>
                    <span>Auteur: {{$post->writer}}</span>
                </div>
                <div class="row">
                    <a href="blog/{{$post->id}}/edit"
                       class="btn btn-outline-dark margin-top-bottom">
                        Aanpassen</a>
                    <form method="POST" action="{{route('blog.destroy', $post->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger margin-top-bottom">Verwijderen
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    <style>
        body {
            overflow-x: hidden;
        }
    </style>
@endsection
