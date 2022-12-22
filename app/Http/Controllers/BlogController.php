<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Policies\GenrePolicy;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            return view('blog', [
                'blogs' => Blog::where('blog_title', 'like', '%' . $request->search . '%')->paginate(),
            ]);
        } else {
            return view('blog', [
                'blogs' => Blog::paginate(3),
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createblog', [
            'pagetitle' => "Create Blog",
            'blogs' => Blog::all(),
            'genres' => Genre::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogRequest $request)
    {
        /* $this->validate($request, [
            'blog_title' => 'required|string|max:50',
            'blog_content' => 'required|string|max:250',
            'blog_type' => 'required|string|max:50',
            'blog_image' => 'required|image',
        ]); */

        Blog::create([
            'blog_title' => $request->blog_title,
            'blog_content' => $request->blog_content,
            'blog_type' => $request->blog_type,
            'blog_image' => $request->file('blog_image')->store('blogimage', 'public'),
            'genre_id' => $request->genre_id,
        ]);

        return redirect('/dashboard/admin_blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('admin_blog', [
            'pagetitle' => 'Blog',
            'blog' => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("updateblog", [
            "blog" => Blog::findOrFail($id),
            "pagetitle" => "Update Blog"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogRequest  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, $id)
    {
        $blog = Blog::findOrFail($id);

        if ($request->file('blog_image')) {
            unlink('storage/' . $blog->blog_image);
            $blog->update([
                "blog_title" => $request->blog_title,
                "blog_content" => $request->blog_content,
                "blog_type" => $request->blog_type,
                "blog_image" => $request->file('blog_image')->store('blogimage', 'public'),
                "genre_id" => $request->genre_id,
            ]);
        } else {
            $blog->update([
                "blog_title" => $request->blog_title,
                "blog_content" => $request->blog_content,
                "blog_type" => $request->blog_type,
                "genre_id" => $request->genre_id,
            ]);
        }

        return redirect("/dashboard/admin_blog");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        $blog->delete();

        return back();
        // return redirect("/dashboard");
    }

    public function admin_blog()
    {
        return view('admin_blog', [
            'pagetitle' => 'Blog',
            'blog' => Blog::all(),
            'genres' => Genre::all()
        ]);
    }
}
