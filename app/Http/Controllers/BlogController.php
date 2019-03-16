<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class BlogController extends Controller
{

    public function ShowBlogyForm(){
        $publishedCategory = Category::where('publication_status', 1)->get();
        return view ('admin.blog.add-blog', ['publicationCategories'=>$publishedCategory]);
    }

    public function SaveBlogInfo(Request $request){

        $this->validate($request,[
            'blog_title' => 'required|alpha|min:5|max:10'
        ]);

        $blogImage = $request->file('blog_image');
        $imageName = $blogImage->getClientOriginalName();
        $directory = 'blog-images/';
        $blogImage->move($directory, $imageName);
        $imageUrl = $directory.$imageName;
        //return 'success';
        //dd($blogImage);

        //return $request->all();

        $blog = new Blog();
        $blog->blog_title=$request->blog_title;
        $blog->author_name= Auth::user()->name;
        $blog->category_id=$request->category_id;
        $blog->blog_description = $request->blog_description;
        $blog->blog_image = $imageUrl;
        $blog->publication_status=$request->publication_status;

        $blog->save();

        return redirect('/blog/add-blog')->with('message', "Blog Info add Successfully");

    }


    public function manageBlogInfo(){
        $blogInfo = Blog::orderBy('id', 'desc')->get();

        $blogInfo = DB::table('blogs')
            ->join('categories','blogs.category_id', '=', 'categories.id')
            ->select('blogs.id','blogs.blog_title','blogs.author_name','blogs.blog_description','blogs.publication_status','blogs.category_id','categories.category_name')
            ->get();

        return view('admin.blog.manage-blog', ['blogInfo'=>$blogInfo]);
    }

    public function unpublishedBlogInfo($id){
        $blogInfoById = Blog::find($id);
        $blogInfoById->publication_status = 0;
        $blogInfoById->save();

        return redirect('/blog/manage-blog')->with('message', 'Blog info unpublished successfully !!!');
    }

    public function publishedBlogInfo($id){
        $blogInfoById = Blog::find($id);
        $blogInfoById->publication_status = 1;
        $blogInfoById->save();

        return redirect('/blog/manage-blog')->with('message', 'Blog info published successfully !!!');
    }

    public function editBlogInfo($id){
        $blog = Blog::find($id);
        return view('admin.blog.edit-blog', ['blog'=>$blog]);
    }

    public function updateBlogInfo(Request $request){
        $blogInfoById = Blog::find($request->blog_id);
        $blogInfoById->blog_title = $request->blog_title;
//        $blogInfoById->category_id = $request->category_id;
        $blogInfoById->blog_description = $request->blog_description;
        $blogInfoById->publication_status = $request->publication_status;
        $blogInfoById->save();

        return redirect('/blog/manage-blog')->with('message', 'Blog info updated successfully !!!');
    }

    public function deleteBlogInfo($id){
        $blogInfoById = Blog::find($id);
        $blogInfoById->delete();

        return redirect('/blog/manage-blog')->with('message', 'Blog info deleted successfully !!!');
    }
}
