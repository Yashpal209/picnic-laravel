<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class FlavourController extends Controller
{
    public function index(?string $category = null)
    {
        $categories = Category::with('products')->orderBy('sort_order')->get();
        $selectedCategory = null;
        $products = collect();

        if ($category) {
            $selectedCategory = Category::where('slug', $category)->first();
            if ($selectedCategory) {
                $products = $selectedCategory->products;
            }
        } else {
            $products = Product::with('category')->get();
        }

        return view('pages.flavours', [
            'categories' => $categories,
            'category' => $category,
            'selectedCategory' => $selectedCategory,
            'products' => $products,
        ]);
    }
}
