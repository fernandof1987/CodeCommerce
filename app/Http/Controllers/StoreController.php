<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

use CodeCommerce\Category;
use CodeCommerce\Product;

use Illuminate\Http\Request;

class StoreController extends Controller {

	public function index()
    {
       // $pFeatured = Product::where('featured', '=', 1)->get();

        $pFeatured = Product::featured()->get();
        //dd($pFeatured);

        $categories = Category::all();

        return view('store.index', compact('categories', 'pFeatured'));
    }

}