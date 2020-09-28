<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Language;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('languages.index', ['languages'=>Language::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('languages.create', ['language'=>new Language]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $language=new Language;
        $language->name=$request->name;

        if(!$language->save()){
            $errors=$language->getErrors();

            return redirect()
                ->route('languages.create')
                ->with('errors', $errors)
                ->withInput();
        }

        //Success
        return redirect()
            ->route('languages.index')
            ->with('message', '<div class="alert alert-success">Language was created!</div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $language=Language::findOrFail($id);
        return view('languages.show', ['language'=>$language, 'languages'=>Language::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $language=Language::findOrFail($id);

        return view('languages.edit', ['language'=>$language]);
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
        //
        $language=Language::findOrFail($id);
        $language->name=$request->name;

        if(!$language->save()){
            $errors=$language->getErrors();

            return redirect()
                ->route('languages.edit', $language->id)
                ->with('errors', $errors)
                ->withInput();
        }

        //Success
        return redirect()
            ->route('languages.index')
            ->with('message', '<div class="alert alert-info">Language was updated</div>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $language=Language::findOrFail($id);
        $language->delete();

        return redirect()
            ->route('languages.index')
            ->with('message', '<div class="alert alert-info">Language has been deleted</div>');
    }
}
