<?php

namespace App\Http\Controllers;

use App\Models\Varian;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      // sesuaikan DB
      // $article = Article::all();
      // $getBrand = Article::with('getBrand')->get();
      
      return view('backend.article.index'
        // ,compact('article','getBrand')
      );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      // sesuaikan DB
      // $varian = Varian::all();
      return view('backend.article.create'
        // ,compact('varian')
      );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      // Ga paham Ngapain

      // $data = $request->validate(
      //   [
      //     'image' => 'required|max:2084',
      //     'title' => 'required|string',
      //     'price' => 'required',
      //     'brand' => 'required'
      //   ]
      // );

      // if ($request->hasFile('image')) {
      //   $image = $request->file('image')->store('assets','public');
      //   $data['image'] = $image;
      // }
      // else{
      //   return redirect()->back();
      // }

      // Article::create(
      //   [
      //     'image' => isset($request->image) ? $data['image'] : null,
      //     'title' => $data['title'],
      //     'price' => $data['price'],
      //     'varian_id' => $data['brand']
      //   ]
      // );

      return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     */
    public function detail($id)
    {
      // sesuaikan DB
      // $article = Article::find($id);
      // $getBrand = Article::with('getBrand')->get();
      return view('backend.article.detail'
        // ,compact('article','getBrand')
      );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
      // sesuaikan DB
      // $varian = Varian::all();
      // $article = Article::find($id);
      return view('backend.article.edit'
        // ,compact('article','varian')
      );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
      // sesuaikan DB

      // $idArticle = Article::findOrfail($id);

      // $data = $request->validate(
      //   [
      //     'image' => 'nullable',
      //     'title' => 'required|string',
      //     'price' => 'required',
      //     'brand' => 'required'
      //   ]
      // );

      // if ($request->hasFile('image')) {
      //   $image = $request->file('image')->store('assets','public');
      //   $data['image'] = $image;
      // }
      // else{
      //   $data['image'] = $idArticle->image;
      // }

      // $idArticle->image = $data['image'];
      // $idArticle->title = $data['title'];
      // $idArticle->price = $data['price'];
      // $idArticle->varian_id = $data['brand'];
      // $idArticle->save();

      return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      // sesuaikan DB
      // $article = Article::find($id);
  
      // if (!$article) {
      //   return redirect()->route('article.index')->with('error', 'Article not found');
      // }
  
      // if ($article->image) {
      //   $file = public_path('storage/'. $article->image);

      //   if (file_exists($file) && is_file($file)) {
      //       unlink($file);
      //   }
      // }

      // $article->delete();
      
      return redirect()->route('article.index')->with('success', 'Article deleted successfully');
    }
    
}
