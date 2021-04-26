<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class PagesController2 extends Controller
{
    public function blogPage(){

        $articles = Article::all();

        return view('blog' , [
            "articles" => $articles
        ]);
    }
    public function articlePage($id){

        $article = Article::find($id);

        if(!$article){
            return abort(404);
        }
//первый способ два раза обращаться к бд за поиском доп условий  в ретерн еще надо вставить "comments"=> $comments для дальнейшего обращения
      //  $comments = Comment::where('article_id',$id)->get();
        $article->comments;
        return view('article' , [
            "article" => $article

        ]);
    }

    public function artcleUpdatePage($id){
        $article = Article::find($id);

        if (!$article){
            return abort('404');
        }

        return view('article_update',[
            "article"=> $article
        ]);
    }
}
