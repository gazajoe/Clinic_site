<?php

namespace App\Http\Controllers;

use App\models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    

    public function StoreAppointment(Request $request){

        $request->validate([

            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'doctor'=>'required',
            'message'=>'required',

        ]);


        $appoint = new Appointment;
        $appoint->name=$request->name;
        $appoint->email=$request->email;
        $appoint->phone=$request->phone;
        $appoint->date=$request->date;
        $appoint->doctor=$request->doctor;
        $appoint->status='in progress';
        $appoint->message=$request->message;

        if(Auth::id()){
        $appoint->user_id =Auth::user()->id;
        }

        
        $appoint->save();

        return redirect()->back()->with('success','message sent');
       
    }


    public function ViewAppointment()
    {
        $appdata = Appointment::all();
        return view('admin.appointment.view')->with(compact('appdata'));
    }

    public function Approve($id){

        $data=Appointment::findorfail($id);
        $data->status='Approved';
        $data->save();


        $notification = array(
            'messsage'=>'Appointment Approved Successfully',
            'alert-type'=>'success',

        );

        return redirect()->back()->with($notification);



    }

    public function ApprovedAppointment(){

        $approvedappointment = Appointment::where('status','approved')->get();
        return view('admin.appointment.approved')->with(compact('approvedappointment'));

        
    }


    public function Declined($id){

        $decline = Appointment::findorfail($id);
        $decline->status='Declined';
        $decline->save();

        $notification = array(
            'message'=>'Appointment declined',
            'error'=>'info',

        );

        return redirect()->back()->with($notification);

    }

    public function DeclinedAppointment(){

        $declinedappointment=Appointment::where('status','Declined')->get();
        return view('admin.appointment.declined')->with(compact('declinedappointment'));
    }


    public function UserCancelled($id){

        $usercancelled=Appointment::findorfail($id);
        $usercancelled->status='Cancelled';
        $usercancelled->save();


        $notification = array(
            'message'=>'Appointment has been Cancelled',
            'alert-type'=>'info',
        );

        return redirect()->back()->with($notification);
    }
}

