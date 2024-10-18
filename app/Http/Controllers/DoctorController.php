<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Doctor;
use App\Models\Specialty;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    

    public function AddDoctor()
    {
        return view('admin.add_doctor');
    }



    Public function StoreDoctor(Request $request)

    {

        $request->validate([
            'specialty_id'=>'required',
            'name' => 'required',
            'email'=>'required',
            'phone'=>'required',
            'ward'=>'required',
            'image'=>'required',
        ]);

        $doctor = new Doctor();
        $doctor->specialty_id=$request->specialty_id;
        $doctor->name =$request->name;
        $doctor->email=$request->email;
        $doctor->phone=$request->phone;
        $doctor->ward=$request->ward;

        if($request->hasFile('image')){

            $image = $request->file('image');

            $filename = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload/images/'), $filename);
            $doctor->image=$filename;
        }

        $doctor->save();

        $notification = array(
            'message'=>'Doctor added successfully',
            'alert-type'=>'success',

        );

        return redirect()->route('view.doctor')->with($notification);
        
}


    public function viewdoctor()
    {
        $viewdoc=Doctor::all();
        $specialty =Specialty::orderBy('name', 'ASC')->get();
        return view('admin.view_doc')->with(compact('viewdoc','specialty'));
    }

    public function editdoctor($id){

        $editdoc = Doctor::findorfail($id);
        $specialty =Specialty::orderBy('name', 'ASC')->get();
        return view('admin.edit_doctor')->with(compact('editdoc','specialty'));
    }


    public function updatedoctor(Request $request, $id)
    
    {
        $request->validate([
            'specialty_id'=>'required',
            'name' => 'required',
            'email'=>'required',
            'phone'=>'required',
            'ward'=>'required',
            'image'=>'required',
        ]);

        $doctor =Doctor::update($id);
        $doctor->specialty_id=$request->specialty_id;
        $doctor->name =$request->name;
        $doctor->email=$request->email;
        $doctor->phone=$request->phone;
        $doctor->ward=$request->ward;

        if($request->hasFile('image')){

            $image = $request->file('image');

            $filename = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload/images/'), $filename);
            $doctor->image=$filename;
        }

        $doctor->save();

        $notification = array(
            'message'=>'Doctor updated successfully',
            'alert-type'=>'success',

        );

        return redirect()->back()->with($notification);
            

    }


    public function AddSpecialty()

    {
        return view('admin.add_specialty');
    }

    Public function StoreSpecialty(Request $request){
        $validate = $request->validate([
            'name'=>'required',

        ]);

        Specialty::insert([
            'name'=>$request->name,
            'created_at'=>Carbon::now(),

        ]);

        $notification = array(

            'message'=>'Specialty Added successfully',
            'alert-type'=>'success',

        );

        return redirect()->route('all.specialty')->with($notification);
    }


    public function viewspec(){
        $data = Specialty::all();
        return view('admin.all_specialty')->with(compact('data'));
    }


    

    public function editspec($id)
    {

        $editspec = Specialty::findorfail($id);
        return view('admin.edit_spec')->with(compact('editspec'));
    }


    public function updatespec(Request $request, $id)
    {

        $validate =$request->validate([
            'name'=>'required',

        ]);

        Specialty::findorfail($id)->update([
            'name'=>$request->name,
            'updated_at'=>Carbon::now(),
        ]);

        $notification =array(
            'message'=>'Specialty Updates successfully',
            'alert-type'=>'success',
        );

        return redirect()->route('all.specialty')->with($notification);
    }


    public function deletespec($id){

        Specialty::findorfail($id)->delete();

        $notification =array(
            'message'=>'Specialty deleted successfully',
            'alert-type'=>'info',
        );

        return redirect()->route('all.specialty')->with($notification);
    }


    public function deletedoctor($id){

        $doctor = Doctor::findorfail($id)->delete();
        $notification =array(
            'message'=>'Doctor deleted successfully',
            'alert-type'=>'info',
        );

        return redirect()->back()->with($notification);
    }
}
