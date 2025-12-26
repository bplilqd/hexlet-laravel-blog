<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function search(Request $request)
    {
        $q = $request->input('q');
        // Like has huge impact on the performance. Use them carefully. Learn indexes and full text search.
        $articles = $q ? Article::where('name', 'like', "%{$q}%")->paginate() : Article::paginate();
        return view('article.search', compact('articles', 'q'));
    }

    public function index()
    {
        $articles = Article::paginate(2);

        // Статьи передаются в шаблон
        // compact('articles') => [ 'articles' => $articles ]
        return view('article.index', compact('articles'));
    }
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }
}
