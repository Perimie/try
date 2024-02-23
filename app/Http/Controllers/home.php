<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;

class home extends Controller
{   
    public function index()
    {
        return view('home');
    }
    public function back()
    {
        return view('home');
    }
    public function add_product(Request $request)
    {

        $request->validate([

            'title'=>'required',
            'description'=>'required',
            'image'=>'required',

        ]);


        $data= new Product;
        $data->title =$request->title;
        $data->description =$request->description;


        $image= $request->image;

        if($image)
        {
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product_image', $imagename);
        $data->image=$imagename;
        }

        

        $data->save();
        return redirect()->back();

    }

    public function show_product()
    {
        $product=Product::all();
        return view('product',compact('product'));

    }
    public function delete_product($id){
        $product=Product::find($id);
        $product->delete();
        return redirect()->back();
    }

    public function update_product($id)
    {
        $product=Product::find($id);
        return view('editproduct',compact('product'));
    }
    
    public function edit_product(Request $request)
    {

        $request->validate([

            'title'=>'required',
            'description'=>'required',

        ]);

        $product=Product::find($request->id);
        $product->title =$request->title;
        $product->description =$request->description;


        $image= $request->image;

        if($image)
        {
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product_image', $imagename);
        $product->image=$imagename;
        }

        

        $product->save();
        return redirect()->back();

    }
}
