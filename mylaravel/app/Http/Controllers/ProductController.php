<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Categories;
use App\Models\ProductList;
class ProductController extends Controller
{
    //
    function index()
    {
        $products = ProductList::with('user')
            ->join('categories', 'product_list.category_id', '=', 'categories.id')
            ->select('categories.name as category_name', 'product_list.name as name', 'product_list.user_id')
            ->get()
            ->groupBy('category_name');

        return view('product', compact('products'));
    }
    function store(Request $req){
        $category = new Categories();
        $category->name = $req->category_name;
        $category->save();

        foreach($req->product_name as $value){
            $product = new ProductList();
            $product->name = $value;
            $product->category_id = $category->id;
            $product->user_id = session('user')->id;
            $product->save();
        }
        return redirect('/product');
    }
}
