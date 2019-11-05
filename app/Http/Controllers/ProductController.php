<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = DB::table('products as p')
                    ->join('categories as c', 'p.category_id', '=', 'c.id')
                    ->select('p.id', 'p.name', 'p.stock', 'p.price', 'c.name as category')
                    ->orderBy('p.name', 'asc')
                    ->orderBy('c.name', 'asc')
                    ->get();

        return view('products')->with('products', $product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'asc')->get();

        return view('newproduct')->with('categories', $categories);
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
            'newproduct' => 'required|string',
            'stock' => 'required|numeric',
            'price' => 'required|numeric',
            'category_id' => 'required|string',
        ]);

        $product = new Product();
        $product->name = $validatedData['newproduct'];
        $product->stock = $validatedData['stock'];
        $product->price = $validatedData['price'];
        $product->category_id = base64_decode($validatedData['category_id']);
        $product->save();

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($product_id)
    {
        $product = DB::table('products as p')
                    ->join('categories as c', 'p.category_id', '=', 'c.id')
                    ->select('p.id', 'p.name', 'p.stock', 'p.price', 'c.name as category')
                    ->orderBy('p.name', 'asc')
                    ->orderBy('c.name', 'asc')
                    ->where('p.id', base64_decode($product_id))
                    ->get();

        if(isset($product))
        {
            return view('editproduct')->with([
                'product' => $product[0],
                'categories' => Category::orderBy('name', 'asc')->get()
            ]);
        }

        return redirect('/products');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product_id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'stock' => 'required|numeric',
            'price' => 'required|numeric',
            'category_id' => 'required|string',
        ]);
        // dd($product_id);

        $product = Product::find(base64_decode($product_id));

        if(isset($product))
        {
            $product->name = $validatedData['name'];
            $product->stock = $validatedData['stock'];
            $product->price = $validatedData['price'];
            $product->category_id = base64_decode($validatedData['category_id']);
            $product->save();
        }

        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id)
    {
        $product = Product::find(base64_decode($product_id));

        if(isset($product))
        {
            $product->delete();
        }

        return redirect('/products');
    }
}
