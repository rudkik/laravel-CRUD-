@extends('layouts.layouts') <?php //включает файл можно сразу файли или сначала деркторию точка последующая вложенность?>



@section('content')
    <h1>Pages Todo</h1>
    @foreach($todos as $todo)
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
               {{$todo->title}}
                @if($todo->status === 1)
                <span class="badge bg-success rounded-pill">Выполнено</span>
                @else
                <span class="badge bg-danger rounded-pill">Выполнено</span>
                @endif
            </li>
        </ul>
        @endforeach
@endsection

