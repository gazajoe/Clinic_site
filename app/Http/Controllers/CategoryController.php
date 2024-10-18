<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Blog_category;
use Carbon\Carbon;



class CategoryController extends Controller
{
    public function AddCategory(){

        return view('admin.blog_category.add');
    }


    public function StoreCategory(Request $request){

        $request->validate([
            'category_name'=>'required',
        ]);


        $category = new Blog_category;
        $category->category_name=$request->category_name;
        $category->created_at=Carbon::now();

        $category->save();

        $notification = array(
            'message'=>'Blog Category added successfully',
            'alert-type'=>'success',
        );
        return redirect()->back()->with($notification);
    }


    public function ViewCategory(){

        $category = Blog_category::all();
        return view('admin.blog_category.view')->with(compact('category'));
    }


    public function EditCategory($id){


        $editcategory = Blog_category::findorfail($id);
        return view('admin.blog_category.edit')->with(compact('editcategory'));
    }

    public function UpdateCategory(Request $request, $id){

        $request->validate([
            'category_name'=>'required',

        ]);

       Blog_category::findorfail($id)->update([
        'category_name'=>$request->category_name,
        'updated_at'=>Carbon::now(),
        
       ]);

        $notification = array(
            'message'=>'Category updated successfully',
            'alert-type'=>'success',

        );

        return redirect()->route('view.category')->with($notification);

    }


    public function DeleteCategory($id){

        Blog_category::findorfail($id)->delete();

        $notification = array(
            'message'=>'Category deleted successfully',
            'alert-type'=>'success',

        );

        return redirect()->route('view.category')->with($notification);
    }


}
