<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;


class ArticleController extends Controller
{
    public function index()
{
    return view('article')->withArticles(Article::all());
}
}
