<?php


namespace App\Http\Controllers\ADMIN;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\BlogTags;

class BlogTagsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        $blogTags = BlogTags::orderBy('id', 'asc')->get();
        return view('cms/BlogTags/index', ['blogTags'=> $blogTags]);
    }

    public function create(){
        return view('cms/BlogTags/addNewTag');
    }
    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required|min:4',
            'slug' => 'required|min:4',
            'description' => 'required|max:260',
        ]);
        BlogTags::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'description' => $request->description,
        ]);
        return redirect(route('tags.index'));
    }
    public function show($id){

    }
    public function edit($id){
        $blogTags = BlogTags::find($id);

        if (empty($blogTags)) {
            Flash::error('Tag not found');
            return redirect(route('tags.index'));
        }
        return view('cms/BlogTags/editTag')->with('blogTags', $blogTags);
    }
    public function update(Request $request, $id){
        $blogTags = BlogTags::find($id);
        $blogTags->title = $request->get('title');
        $blogTags->slug = $request->get('slug');
        $blogTags->description = $request->get('description');
        $blogTags->save();
        session()->flash('message', 'Tag has been updated');
        return redirect()->back();
    }
    public function destroy(Request $request, $id){
        $blogTags = BlogTags::find($id);
        $blogTags->delete();
        return redirect(route('tags.index'));
    }
}
