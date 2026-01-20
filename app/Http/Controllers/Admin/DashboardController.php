<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Models\Product;
use App\Models\Store;
use App\Models\Category;
use App\Models\Slider;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'leads_count' => Lead::count(),
            'products_count' => Product::count(),
            'stores_count' => Store::count(),
            'categories_count' => Category::count(),
            'sliders_count' => Slider::count(),
            'recent_leads' => Lead::orderByDesc('created_at')->limit(5)->get(),
        ]);
    }
}
