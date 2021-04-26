@extends('layouts.layouts') <?php //включает файл можно сразу файли или сначала деркторию точка последующая вложенность?>



@section('content')
    <h1>Pages Blog</h1>
    <div class="list-group">
       <h1> {{$article->title}}</h1>
        <p>{{$article->body}}</p>
    </div>
    <ul class="list-group">
        @foreach($article->comments as $comment)
            <li>{{$comment->body}}</li>
        @endforeach
    </ul>
@endsection

