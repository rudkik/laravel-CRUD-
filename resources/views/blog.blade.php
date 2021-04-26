@extends('layouts.layouts') <?php //включает файл можно сразу файли или сначала деркторию точка последующая вложенность?>



@section('content')
    <h1>Pages Blog</h1>

    <form class="mb-4" method="post" action="/article">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text"  name="title" class="form-control" id="title" placeholder="">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Example textarea</label>
            <textarea class="form-control" name="body" id="body" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Add article</button>
    </form>
    <div class="list-group">
        @foreach($articles as $article)
        <a href="/blog/{{$article->id}}" class="list-group-item list-group-item-action" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$article->title}}</h5>
                <small>{{$article->created_at}}</small>
            </div>
            <p class="mb-1">{{$article->body}}</p>
        </a>
        <div class="d-flex">
            <a href="/article/{{$article->id}}/update" type="submit" class="btn btn-success">Update</a>
            <form method="post" action="/article/delete" class="mr-3">
                @csrf
                <input class="hidden" name="id" value="{{$article->id}}">
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>


        </div>

            @endforeach
    </div>
@endsection

