<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('Articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
       // Ajout Produit
       $request->validate([
        'title'=>'required|unique:articles|max:255',
        'content'=>'required|string',
       ]);
       $pdt = new Article();

       $pdt->title = $request->input('title');
       $pdt->content = $request->input('content');
       $pdt->save(); // souvgarder dans la base de données
       return redirect()->route('articles.index')->with('success', 'Article created successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo "je suis dans show avec id = $id";
        $P = Article::find($id);
        if ($P == null){
            abort(404);
        }
        return view('Articles.shows',compact('P'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo "am in show" ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
