@extends('layouts.layouts') <?php //включает файл можно сразу файли или сначала деркторию точка последующая вложенность?>



@section('content')
    <h1>Pages Blog</h1>
    <div class="list-group">
        <h1> {{$article->title}}</h1>

        <form class="mb-4" method="post" action="/article/update">
            @csrf
            <input  name="id" class="hidden" id="" placeholder="" value="{{$article->id}}">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text"  name="title" class="form-control" id="title" placeholder="" value="{{$article->title}}">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Example textarea</label>
                <textarea class="form-control" name="body" id="body" rows="3">{{$article->body}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Update article</button>
        </form>

    </div>
@endsection

