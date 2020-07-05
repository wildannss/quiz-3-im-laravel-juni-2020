<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArtikelModel;

class ArtikelController extends Controller
{
    function home(){
        $open = url('/images/quiz3.png');
        return "<img src='{$open}'/><br/><a class='btn btn-success btn-icon-split' href='/artikel'>Menuju Halaman Artikel</a>";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = ArtikelModel::all();
        return view('welcome', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = ArtikelModel::create([
            'title' => $request->title,
            'body'  => $request->body,
            'tag'  => $request->tag,
            'slug'  => str_replace(' ', '-', strtolower($request->title)),
            'user_id'  => 1
        ]);

        return redirect(url('/artikel'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = ArtikelModel::findOrFail($id);
        return view('show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = ArtikelModel::findOrFail($id);
        return view('edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        ArtikelModel::where('id', $id)->update([
            'title' => $request->title,
            'body'  => $request->body,
            'tag'  => $request->tag,
            'slug'  => str_replace(' ', '-', strtolower($request->title)),
            'user_id'  => 1
        ]);

        return redirect(url('/artikel'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = ArtikelModel::find($id);
        $del->delete();
        return redirect(url('/artikel'));
    }
}
