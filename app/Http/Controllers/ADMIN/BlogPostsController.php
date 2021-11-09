<?php

namespace App\Http\Controllers\ADMIN;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Models\BlogPosts;

class BlogPostsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        $blogPosts = BlogPosts::orderBy('id', 'asc')->get();
        return view('cms/BlogPosts/index', ['blogPosts'=> $blogPosts]);
    }

    public function create(){
        return view('cms/BlogPosts/addNewPost');
    }
    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required|min:4',
            'slug' => 'required|min:4',
            'description' => 'required|max:260',
        ]);
        BlogPosts::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'description' => $request->description,
        ]);
        return redirect(route('posts.index'));
    }
    public function show($id){

    }
    public function edit($id){
        $blogPosts = BlogPosts::find($id);

        if (empty($blogPosts)) {
            Flash::error('Post not found');
            return redirect(route('posts.index'));
        }
        return view('cms/BlogPosts/editPost')->with('blogPosts', $blogPosts);
    }
    public function update(Request $request, $id){
        $blogPosts = BlogPosts::find($id);
        $blogPosts->title = $request->get('title');
        $blogPosts->slug = $request->get('slug');
        $blogPosts->description = $request->get('description');
        $blogPosts->save();
        session()->flash('message', 'Post has been updated');
        return redirect()->back();
    }
    public function destroy(Request $request, $id){
        $blogPosts = BlogPosts::find($id);
        $blogPosts->delete();
        return redirect(route('posts.index'));
    }
}
