<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/9
 * Time: 11:46
 */

namespace App\Http\Controllers;
use App\Article;
use App\HomePage;
use App\Topic;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function topics(Request $request)
    {
        $topics = Topic::orderBy('id')->get();
        return $topics;
    }

    public function articles(Request $request)
    {
        $articles = Article::with('author')->paginate(20);
        return $articles;
    }
    public function article(Request $request)
    {
        $id = $request->input("id");
        $article = Article::with('author','topic')->find($id);
        return $article;
    }
    public function homepage(Request $request)
    {
        $article = HomePage::with('author','topic')->where('is_homepage',true)->get();
        return $article;
    }

}