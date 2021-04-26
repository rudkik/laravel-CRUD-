<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class LaravelController extends Controller
{
    public function todos(){

        //Способы добавление записи в бд
//        $todo = new Todo();
//
//        $todo->title= "Дочитать книгу";
//        $todo->note= "Дочитать книгу na 99 str";
//
//        $todo = $todo->save();
//

//            $todo = Todo::create([
//                "title"=>"dochitati knigy",
//                "note"=>"Дочитать книгу na 99 st"
//            ]);

//        $todo =Todo::find(1);
//
//        //изменение данных
//        $todo->status = 0;
//        $todo->save();

        //удалить данных
//        $todo->delete();
//      по определенным условиям вывод
        $todos = Todo::where('status', 0)->get();

        //вывод всех элементов
        //$todos = Todo::all();

        return view('todos', [
            "todos"=> $todos
        ]);
    }

}
