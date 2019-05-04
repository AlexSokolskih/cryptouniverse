<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data["products"] = Product::all()->map(function ($item, $key) {
            $item->hidden = ($item->hidden == 0) ? 'видно' : "невидно" ;
          return $item;
        });

        return view('product.product', $data);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:200|alpha_dash',
            'price' => 'required|integer',
            'hidden' => 'in:on',
        ]);

        $product = new Product();

        $product->name = $request->name;
        $product->price = $request->price;
        $product->hidden = ( $request->hidden === "on" );
        $product->save();

        return view('admin/product');
    }
}
