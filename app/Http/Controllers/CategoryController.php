<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('name', 'asc')->get();

        return view('categories')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'newcategory' => 'required|string',
        ]);

        $category = new Category();
        $category->name = $validatedData['newcategory'];
        $category->save();

        return redirect('/categorias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($category_id)
    {
        $category = Category::find(base64_decode($category_id));

        if(isset($category))
        {
            return view('editcategory')->with('category', $category);
        }

        return redirect('/categorias');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $category_id)
    {
        $validatedData = $request->validate([
            'editname' => 'required|string',
        ]);

        $category = Category::find(base64_decode($category_id));

        if(isset($category))
        {
            $category->name = $validatedData['editname'];
            $category->save();
        }

        return redirect('/categorias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($category_id)
    {
        $category = Category::find(base64_decode($category_id));

        if(isset($category))
        {
            $category->delete();
        }

        return redirect('/categorias');
    }
}
