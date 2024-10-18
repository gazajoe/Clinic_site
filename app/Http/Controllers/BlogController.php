<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Blog;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function create(){

        return view('admin.blog.create');

    }

    public function store(Request $request){

        if ($request->hasFile('image')) {
            # code...$
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('upload/blog_images/'),$filename);
            $save_url = 'upload/blog_images/'.$filename;

            Blog::insert([
                'category_id'=>$request->category_id,
                'title'=>$request->title,
                'description'=>$request->description,
                'tags'=>$request->tags,
                'image'=>$save_url,
                'created_at'=>Carbon::now(),
            ]);


            $notification = array(
                'message'=>'Blog post uploaded successfully',
                'alert-type'=>'success',
            );

            return redirect()->back()->with($notification);
        }


    }

    public function viewpost(){

        $post = Blog::all();
        return view('admin.blog.view')->with(compact('post'));
    }


    public function editpost($id){

        $blogpost=Blog::findorfail($id);
        return view('admin.blog.edit')->with(compact('blogpost'));
    }


    public function updatepost(Request $request,$id){
        if ($request->hasFile('image')) {
            # code...$
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('upload/blog_images/'),$filename);
            $save_url = 'upload/blog_images/'.$filename;

            Blog::findorfail($id)->update([
                'category_id'=>$request->category_id,
                'title'=>$request->title,
                'description'=>$request->description,
                'tags'=>$request->tags,
                'image'=>$save_url,
                'created_at'=>Carbon::now(),
            ]);


            $notification = array(
                'message'=>'Blog post updated successfully',
                'alert-type'=>'success',
            );

            return redirect()->back()->with($notification);
        }else

        {
            Blog::findorfail($id)->update([
                'category_id'=>$request->category_id,
                'title'=>$request->title,
                'description'=>$request->description,
                'tags'=>$request->tags,
                'created_at'=>Carbon::now(),
            ]);


            $notification = array(
                'message'=>'Blog post updated without image successfully',
                'alert-type'=>'success',
            );

            return redirect()->back()->with($notification);



        }


        
    }


    public function deletepost($id){

        Blog::findorfail($id)->delete();

        $notification = array(
            'message'=>'Blog post deleted successfully',
            'alert-type'=>'success',
        );

        return redirect()->back()->with($notification);


    }
}
