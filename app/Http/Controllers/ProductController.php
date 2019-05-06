<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data["products"] = Product::all()->reject(function ($item, $key) {
            if ( ($item->hidden == 1) ) {
                return true;
            }
        });

        return view('product.product', $data);
    }
    public function adminIndex(){
        $data=[];
        $data = $this->getDataForAdminProductView($data);

        return view('admin.product', $data);
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

        return redirect()->route('adminproducts');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('adminproducts');
    }

    public function edit(Product $product)
    {
        $data["product"] = $product;
        return view('admin/editproduct', $data);
    }

    public function update(Product $product, Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:200|alpha_dash',
            'price' => 'required|integer',
            'hidden' => 'in:on',
        ]);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->hidden = ( $request->hidden === "on" );

        $product->save();

        return redirect()->route('adminproducts');
    }

    /**
     * @param $data
     * @return mixed
     */
    protected function getDataForAdminProductView($data)
    {
        $data["products"] = Product::all()->map(function ($item, $key) {
            $item->hidden = ($item->hidden == 0) ? 'видно' : "невидно";
            return $item;
        });
        return $data;
    }


}
