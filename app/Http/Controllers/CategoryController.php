<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
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
        $message = [
            'name.required' => 'O campo \'categoria\' é obrigatório.',
            'name.unique' => 'A categoria já está cadastrada.'
        ];

        $validatedData = $request->validate([
            'name' => 'required|string|unique:categories',
        ], $message);

        $category = new Category();
        $category->name = $validatedData['name'];
        $category->save();

        return redirect('/categories');
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

        return redirect('/categories');
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
            'name' => 'required|string',
        ]);

        $category = Category::find(base64_decode($category_id));

        if(isset($category))
        {
            $category->name = $validatedData['name'];
            $category->save();
        }

        return redirect('/categories');
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
            Product::where('category_id', $category->id)->delete();
            $category->delete();
        }

        return redirect('/categories');
    }

    public function getJson()
    {
        return json_encode(Category::select('id', 'name')->get());
    }
}
