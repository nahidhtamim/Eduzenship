<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    
    public function index(){
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }


    public function saveBlog(Request $request)
    {
        $blog = new Blog;
        $blog->blog_title = $request->input('blog_title');
        $blog->blog_description = $request->input('blog_description');
        $blog->blog_slug = $request->input('blog_slug');
        $blog->blog_status = $request->input('blog_status')==true ? '1':'0';
        if($request->hasfile('blog_image'))
        {
            $file = $request->file('blog_image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('images/blogs/', $fileName);
            $blog->blog_image = $fileName; 
        }
        $blog->save();
        return redirect()->back()->with('status', 'Your Blog Has Been Saved');
    }

    public function editBlog($slug){
        $blog = Blog::Where('blog_slug', $slug)->first();
        return view('admin.blogs.edit-blog', compact('blog'));
    }

    public function updateBlog(Request $request, $slug)
    {
        $blog = Blog::Where('blog_slug', $slug)->first();
        $blog->blog_title = $request->input('blog_title');
        $blog->blog_description = $request->input('blog_description');
        $blog->blog_slug = $request->input('blog_slug');
        if($request->hasfile('blog_image'))
        {
            $file = $request->file('blog_image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('images/blogs/', $fileName);
            $blog->blog_image = $fileName; 
        }
        $blog->update();
        return redirect('/view-blogs')->with('status', 'Your Blog Has Been Updated');
    }

    public function activeBlog($slug){
        $blog = Blog::Where('blog_slug', $slug)->first();
        $blog->blog_status = '1';
        $blog->update();
        return redirect()->back()->with('status', 'Your Blog Status Has Been Updated');
    }

    public function deactiveBlog($slug){
        $blog = Blog::Where('blog_slug', $slug)->first();
        $blog->blog_status = '0';
        $blog->update();
        return redirect()->back()->with('status', 'Your Blog Status Has Been Updated');
    }

    public function deleteBlog($slug){
        $blog = Blog::Where('blog_slug', $slug)->first();
        $blog->delete();
        return redirect()->back()->with('status', 'Your Blog Status Has Been Deleted');
    }
}
