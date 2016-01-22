<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/9
 * Time: 11:46
 */

namespace App\Http\Controllers;
use App\Article;
use App\ArticleCoverModel;
use App\Topic;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function topics(Request $request)
    {
        $topics = Topic::orderBy('id')->get();
        return $topics;
    }

    public function article(Request $request)
    {
        $id = $request->input("id");
        $article = Article::with('author','topic')->find($id);
        return $article;
    }
    public function homepage(Request $request)
    {
        $headline = ArticleCoverModel::with('author','topic')->where('is_headlines',true)->first();
        if(is_null($headline))
        {
            $article = ArticleCoverModel::with('author','topic')->where('is_homepage',true)->orderBy('publishTime','desc')->get();
        }
        else
        {
            $article = ArticleCoverModel::with('author','topic')->where('is_homepage',true)->where('id','!=',$headline -> id)->orderBy('publishTime','desc')->get();
            $article -> prepend($headline);
        }
        return $article;
    }

    public function topic(Request $request)
    {
        $id = $request->input("id");
        if(is_null($id))
        {
            return null;
        }
        else
        {
            $articles = ArticleCoverModel::with('author','topic')->where('topic_id','=',$id)->paginate(20);
        }
        return $articles;
    }
}