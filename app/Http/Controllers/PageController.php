<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;

class PageController extends Controller
{
    function homepage(){
        return view('homepage', ['article'=>Article::get()]);
    }

    function add_article(Request $request){

        $request->validate([
            'category_id'=>'required',
            'slug'=>'required|unique:articles|min:4|max:30',
            'title'=>'required|min:4|max:50',
            'lead'=>'required|min:4|max:2000',
            'body'=>'required|min:4'
        ]);

            Article::create([
            'category_id'=>$request->category_id,
            'slug'=>$request->slug,
            'title'=>$request->title,
            'lead'=>$request->lead,
            'body'=>$request->body
            ]);

            return redirect()->back()->with('success_message', 'A cikket sikeresen elmentetted.');
    }

    function edit_articles(Article $article,Request $request){
        
        $request->validate([
            'category_id'=>'required',
            'slug'=>'required|unique:articles,slug,'.$article->id.'|min:4|max:30',
            'title'=>'required|min:4|max:50',
            'lead'=>'required|min:4|max:2000',
            'body'=>'required|min:4'
        ]);

        $article->update([
            'category_id'=>$request->category_id,
            'slug'=>$request->slug,
            'title'=>$request->title,
            'lead'=>$request->lead,
            'body'=>$request->body
        ]);

        return redirect()->back()->with('success_message', 'Cikk frissítve lett.');
    }

    function add_category(Request $request){
        $request->validate([
            'name'=>'required|min:3|max:50',
            'image'=>'nullable',
            'description'=>'nullable'
        ]);

        Category::create([
            'name'=>$request->name,
            'image'=>$request->image,
            'description'=>$request->description
            ]);

            return redirect()->back()->with('success_message', 'A cikket sikeresen elmentetted.');
    }

    function edit_category(Category $category, Request $request){
        $request->validate([
            'name'=>'required|min:3|max:50',
            'image'=>'nullable',
            'description'=>'nullable'
        ]);

        $category->update([
            'name'=>$request->name,
            'image'=>$request->image,
            'description'=>$request->description
            ]);

            return redirect()->back()->with('success_message', 'A kategóriát sikeresen frissítetted.');
    }

    function delete_category(Category $category, Request $request){
        $category->delete();

        return redirect('/admin/category/list')->with('success_message', 'A kategóriát sikeresen törölted.');
    }
}
