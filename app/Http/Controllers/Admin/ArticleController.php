<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
    //文章列表页面
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $articles = Article::get();
        return view('admin.articles.index')->with('articles', $articles);
    }

    //文章创建页面

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view("admin.articles.create");
    }

    //文章创建

    /**
     *
     */
    public function store(Request $request)
    {
        Article::create($request->all());
        return redirect(route('admin.articles.index'))->with('msg', '新增成功！');
    }

    //文章修改页面

    /**
     *
     */
    function edit($id)
    {
        $article = Article::find($id);
        return view('admin.articles.edit')->with('article',$article);
    }

    //文章修改

    /**
     *
     */
    public function update()
    {

    }

    //文章删除

    /**
     *
     */
    public function destroy()
    {

    }
}
