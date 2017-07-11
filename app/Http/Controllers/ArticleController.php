<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;

use App\Http\Controllers\Controller;

class ArticleController extends Controller
{	
	public function index()
	{
		$articles = Article::all();
	}
}
