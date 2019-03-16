<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.Category.add-category');
    }

    public function saveCategoryInfo(Request $request){
        //return $request->all();
       $category = new Category();
       $category->category_name = $request->category_name;
       $category->category_description = $request->category_description;
       $category->publication_status = $request->publication_status;
       $category->save();
      // return 'success';

        return redirect('/Category/add-category')->with('message', 'Category Info Add Successfuly');

    }

    public function manageCategoryInfo(){

        $categories = Category::orderBy('id' , 'desc') -> get();
        return view('admin.Category.manage-category',['categories'=> $categories]);
    }
    public function unpublishedCategoryInfo($id){
        $categoryById = Category::find($id);
        $categoryById->publication_status = 0;
        $categoryById->save();
        return redirect('/Category/manage-category')->with('message', 'Category Info Unpublished');

    }

    public function publishedCategoryInfo($id){
        $categoryById = Category::find($id);
        $categoryById->publication_status = 1;
        $categoryById->save();
        return redirect('/Category/manage-category')->with('message', 'Category Info published');

    }

    public function editCategoryInfo($id){

        $categoryById = Category::find($id);
        return view('admin.Category.edit-category' ,['categoryById'=>$categoryById]);

    }

    public function updateCategoryInfo(Request $request){
       // return $request->all();
        $categoryById = Category::find($request->category_id);

        $categoryById->category_name = $request->category_name;
        $categoryById->category_description = $request->category_description;
        $categoryById->publication_status = $request->publication_status;
        $categoryById->save();
        return redirect('/Category/manage-category')->with('message', 'Category Info Update Successfully ');

    }

    public function deleteCategoryInfo($id){

        $categoryById = Category::find($id);
        $categoryById->delete();
        return redirect('/Category/manage-category')->with('message' , 'Category Info Delete Successfully');

    }
}
