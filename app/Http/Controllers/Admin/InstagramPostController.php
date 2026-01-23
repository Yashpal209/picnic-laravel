<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InstagramPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InstagramPostController extends Controller
{
    public function index()
    {
        $instagramPosts = InstagramPost::paginate(20);
        return view('admin.instagram_posts.index', compact('instagramPosts'));
    }

    public function create()
    {
        return view('admin.instagram_posts.form');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:4096',
            'post_url' => 'nullable|url|max:255',
            'embed_html' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('instagram', 'public');
            $data['image'] = '/storage/' . $path;
        }

        InstagramPost::create($data);
        return redirect()->route('admin.instagram-posts.index')->with('success', 'Instagram post created.');
    }

    public function edit(InstagramPost $instagramPost)
    {
        return view('admin.instagram_posts.form', compact('instagramPost'));
    }

    public function update(Request $request, InstagramPost $instagramPost)
    {
        $data = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:4096',
            'post_url' => 'nullable|string|max:255',
            'embed_html' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            if ($instagramPost->image && str_starts_with($instagramPost->image, '/storage/')) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $instagramPost->image));
            }

            $path = $request->file('image')->store('instagram', 'public');
            $data['image'] = '/storage/' . $path;
        }

        $instagramPost->update($data);
        return redirect()->route('admin.instagram-posts.index')->with('success', 'Instagram post updated.');
    }

    public function destroy(InstagramPost $instagramPost)
    {
        // Delete image from storage if exists
        if ($instagramPost->image && str_starts_with($instagramPost->image, '/storage/')) {
            Storage::disk('public')->delete(
                str_replace('/storage/', '', $instagramPost->image)
            );
        }

        $instagramPost->delete();

        return redirect()
            ->route('admin.instagram-posts.index')
            ->with('success', 'Instagram post deleted.');
    }
}
