<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\MediaItem;
use App\Models\Video;

class PageController extends Controller
{
    public function contact()
    {
        return view('pages.contact');
    }

    public function order()
    {
        return view('pages.order');
    }

    public function media()
    {
        return view('pages.media', [
            'media_items' => MediaItem::all(),
            'videos' => Video::all(),
        ]);
    }

    public function storeLocator()
    {
        return view('pages.store-locator', [
            'stores' => Store::all(),
        ]);
    }

    public function franchise()
    {
        return view('pages.franchise');
    }

    public function distributor()
    {
        return view('pages.distributor');
    }
}
