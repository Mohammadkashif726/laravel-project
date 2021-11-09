<?php


namespace App\Http\Controllers\ADMIN;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\BlogCategories;

class BlogCategoriesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        $blogCategories = BlogCategories::orderBy('id', 'asc')->get();
        return view('cms/BlogCategories/index', ['blogCategories'=> $blogCategories]);
    }

    public function create(){
        return view('cms/BlogCategories/addNewCategory');
    }
    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required|min:4',
            'slug' => 'required|min:4',
            'description' => 'required|max:260',
            'featured_image' => 'required|max:260',
        ]);
        BlogCategories::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'description' => $request->description,
            'featured_image' => $request->featured_image,
        ]);
        return redirect(route('categories.index'));
    }
    public function show($id){

    }
    public function edit($id){
        $blogCategories = BlogCategories::find($id);

        if (empty($blogCategories)) {
            Flash::error('Category not found');
            return redirect(route('categories.index'));
        }
        return view('cms/BlogCategories/editCategory')->with('blogCategories', $blogCategories);
    }
    public function update(Request $request, $id){
        $blogCategories = BlogCategories::find($id);
        $blogCategories->title = $request->get('title');
        $blogCategories->slug = $request->get('slug');
        $blogCategories->description = $request->get('description');
        $blogCategories->featured_image = $request->get('featured_image');
        $blogCategories->save();
        session()->flash('message', 'Category has been updated');
        return redirect()->back();
    }
    public function destroy(Request $request, $id){
        $blogCategories = BlogCategories::find($id);
        $blogCategories->delete();
        return redirect(route('categories.index'));
    }
}
