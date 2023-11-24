<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $productsP = Product::latest()->paginate(5);
    $productsA = Product::latest()->take(5)->get();

    return view('admin.product', compact('productsP'))
        ->with('productsA', $productsA);
    }

    // public function index()
    // {

    //     return view('admin.product',['products'=> Product::latest()->paginate(5)

    //     // DB::table('users')->paginate(15)
    // ]);
    // }

    // public function dashboard()
    // {

    //     return view('admin.dash',['products'=> Product::latest(5)
    //     // DB::table('users')->paginate(15)
    // ]);
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('admin.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      // validate data
      $request->validate([
        'name' => 'required',
        'description' =>'required',
        'image'=> 'required|mimes:jpg,jpeg,png,gif,webp,gif|max:10000'
      ]);

        //upload image

      $imageName =time().'.'.$request->image->extension();
      $request->image->move(public_path('products'), $imageName);


      $product = new Product;
      $product->image=$imageName;
      $product->name=$request->name;
      $product->price=$request->price;
      $product->description=$request->description;

      $product->save();
      return redirect()->route('products.index')->with('success','Item Added, Successfully !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = product::where('id',$id)->first();
        return view('admin.show',['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $product = Product::where('id',$id)->first();
       return view('admin.edit',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validate data
      $request->validate([
        'name' => 'required',
        'description' =>'required',
        'image'=> 'nullable|mimes:jpg,jpeg,png,gif,webp,gif|max:10000'
      ]);

      $product= Product::where('id',$id)->first();

      if(isset($request->image)){
        $imageName =time().'.'.$request->image->extension();
        $request->image->move(public_path('products'), $imageName);
        $product->image=$imageName;
      }
        //upload image


      $product->name=$request->name;
      $product->price=$request->price;
      $product->description=$request->description;

      $product->save();
      return back()->withSuccess('Item Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $product = Product::where('id',$id)->first();
       $product->delete();
       return back()->withSuccess('Item Deleted Successfully!');

    }
}
