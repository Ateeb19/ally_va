<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Start the base query and order blogs by latest first
        $query = Blog::orderBy('id', 'desc');
        // You can also use ->latest() which is shorthand for orderBy('created_at', 'desc')

        // Check if the search term is present in the request with the name 'blog_search'
        if ($request->filled('blog_search')) {
            $searchTerm = $request->input('blog_search');

            // Filter blogs where the 'title' column contains the search term (case-insensitive)
            $query->where('title', 'LIKE', '%' . $searchTerm . '%');
        }

        // Paginate the results and retain filters in pagination
        $blogs = $query->paginate(10)->appends($request->query());

        return view('blog.index', compact('blogs'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'blog_image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'description' => 'required|string',
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->sub_title = $request->sub_title;
        $blog->description = $request->description;
        if ($request->hasFile('blog_image')) {
            $file = $request->file('blog_image');
            $filename = time() . '_' . $file->getClientOriginalName(); // keep original name
            $imagePath = $file->storeAs('blogs', $filename, 'public');
            $blog->photo = $imagePath;
        }
        $blog->status = $request->status;
        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::find($id);

        return view('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            // 'blog_image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'description' => 'required|string',
        ]);



        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->sub_title = $request->sub_title;
        $blog->description = $request->description;
        if ($request->hasFile('blog_image')) {
            $file = $request->file('blog_image');
            $filename = time() . '_' . $file->getClientOriginalName(); // keep original name
            $imagePath = $file->storeAs('blogs', $filename, 'public');
            $blog->photo = $imagePath;
        }
        $blog->status = $request->status;
        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function deleteMultiple(Request $request)
    {
        // dd($request->all());
        $ids = explode(',', $request->ids);

        if (count($ids) > 0) {
            Blog::whereIn('id', $ids)->delete();
        }

        return redirect()->route('blogs.index')->with('success', 'Selected blog deleted successfully.');
    }

    public function FrontBlogDetailShow(Request $request, $blog_id)
    {
        // dd($blog_id);

        $blogDetail = Blog::find($blog_id);

        return view('insights_detail', compact('blogDetail'));
    }
}
