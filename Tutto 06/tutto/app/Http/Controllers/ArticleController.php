<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Article;

class ArticleController extends Controller
{

    public function index() {
        // Simuler une liste d'articles
        $articles = [
            ['id' => 1, 'title' => 'Introduction à Laravel', 'content' => 'Lorem ipsum...'],
            ['id' => 2, 'title' => 'Pourquoi choisir Laravel ?', 'content' => 'Lorem ipsum...'],
            ['id' => 3, 'title' => 'Mastering Laravel 2024', 'content' => 'Laravel is a very good framework...']
        ];
        return view('articles.index', compact('articles'));
    }

    public function show($id) {
        // Simuler un article unique
        $article = [
            'id' => $id,
            'title' => "Article $id",
            'content' => 'Contenu de l’article...'
        ];
        return view('articles.show', compact('article'));
    }





    // Index
    // public function index() {
    //     $articles = Article::all();
    //     return view('articles.index', compact('articles'));
    // }

    // Create & Store
    // public function create() {
    //     return view('articles.create');
    // }

    // public function store(Request $request) {
    //     $validated = $request->validate([
    //         'title' => 'required|max:255',
    //         'content' => 'required',
    //     ]);
    
    //     Article::create($validated);
    //     return redirect()->route('articles.index')->with('success', 'Article créé avec succès.');
    // }

    // Show
    // public function show(Article $article) {
    //     return view('articles.show', compact('article'));
    // }

    // Edit & Update
    // public function edit(Article $article) {
    //     return view('articles.edit', compact('article'));
    // }

    // public function update(Request $request, Article $article) {
    //     $validated = $request->validate([
    //         'title' => 'required|max:255',
    //         'content' => 'required',
    //     ]);
    
    //     $article->update($validated);
    //     return redirect()->route('articles.index')->with('success', 'Article mis à jour avec succès.');
    // }

    // Delete
    // public function destroy(Article $article) {
    //     $article->delete();
    //     return redirect()->route('articles.index')->with('success', 'Article supprimé avec succès.');
    // }

}