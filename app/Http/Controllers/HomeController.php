<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')->withArticles(\App\Article::all());
    }


    public function store(Request $request)
    {
        echo 'gg';
        $article = new \App\Article;
        $article->title = $request->get('title');
        $article->body = $request->get('body');
        $article->user_id = 1; 
        if ($article->save()) {
            return redirect('/');
        } else {
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }
}
