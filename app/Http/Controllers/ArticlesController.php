<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\CheckArticlesRequest;
use App\Http\Requests;

class ArticlesController extends Controller
{
    public function index(){
        $articles = Articles::all();
        return view('articles.index')->with(['articles'=>$articles]);
    }

    public function create(){
        return view('articles.create');
    }

    public function store(CheckArticlesRequest $request){
        $data = $request->all();
        Articles::create($data);
        return redirect('articles');
    }

    public function edit($id){
        $article = Articles::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update($id, CheckArticlesRequest $request){
        $articles = Articles::findOrFail($id);

        $articles->update($request->all());

        return redirect('articles');
    }
}
