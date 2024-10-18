<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Auth;
use App\models\Blog;
use App\models\Doctor;
use App\models\Home;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{
    public function UserAppointment(){
        if(Auth::id())
        {
            $user_id = Auth::user()->id;
            $appoint = Appointment::where('user_id', $user_id)->get();
             return view('front.pages.user-appointment')->with(compact('appoint'));

        }else {
            return redirect()->back();
        }


 
       
    }


    public function BlogDetails($id){

        $details=Blog::findorfail($id);

        return view('front.blog.details')->with(compact('details'));
    }

    public function Blog(){

        $blog = Blog::all();
        return view('front.blog.post')->with(compact('blog'));
    }

public function doctor(){

    $doctor = Doctor::all();
    return view('front.pages.docpage')->with(compact('doctor'));
}

public function HomeIndex(){

    return view('admin.home.page');
}

public function StoreHome(Request $request){

if($request->hasFile('background_image')){

    $image = $request->file('background_image');
    $filename = time().'.'.$image->getClientOriginalExtension();
    $image->move(public_path('upload/background_image/'), $filename);
    $save_url = 'upload/background_image/'.$filename;

    Home::insert([

        'subhead'=>$request->subhead,
        'subhead2'=>$request->subhead2,
        'note'=>$request->note,
        'description'=>$request->description,
        'background_image'=>$save_url,
    ]);

    $notification =  array(
        'message'=>'Home details added',
        'alert-type'=>'success',
    );

    return redirect()->back()->with($notification);
}


}

public function Homedetails(){

    $home = Home::all();
    return view('admin.home.homepage')->with(compact('home'));
}


public function edithome($id){

    $edithome=Home::findorfail($id);
    return view('admin.home.edit')->with(compact('edithome'));
}

public function updatehome(Request $request, $id){
    if($request->hasFile('background_image')){

        $image = $request->file('background_image');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('upload/background_image/'), $filename);
        $save_url = 'upload/background_image/'.$filename;
    
        Home::findorfail($id)->update([
    
            'subhead'=>$request->subhead,
            'subhead2'=>$request->subhead2,
            'note'=>$request->note,
            'description'=>$request->description,
            'background_image'=>$save_url,
        ]);
    
        $notification =  array(
            'message'=>'Home details updated',
            'alert-type'=>'success',
        );
    
        return redirect()->back()->with($notification);
    }else

    {
        Home::findorfail($id)->update([
    
            'subhead'=>$request->subhead,
            'subhead2'=>$request->subhead2,
            'note'=>$request->note,
            'description'=>$request->description,
            
        ]);
    
        $notification =  array(
            'message'=>'Home details updated with no image',
            'alert-type'=>'success',
        );
    
        return redirect()->back()->with($notification);
    }

}
    
}
