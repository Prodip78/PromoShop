<?php

namespace App\Http\Controllers\Forntend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Admin\Contact;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Session;
class ContactController extends Controller
{
    public function index(){
    	return view('frontend.contact');
    }

    public function contact_message(Request $request){
    	$this->validate($request,[
    		'name'  => 'required',
    		'email'  => 'required|email',
    		'subject'  => 'required',
    		'msg'  => 'required'
    		

    	]);

    	$data=array(
    		'name' =>$request->name,
    		'email' =>$request->name,
    		'subject' =>$request->subject,
    		'msg' =>$request->msg
    		

    	);

    	DB::table('contacts')->insert($data);

                return back()->with('message', 'Create Successfully');


    }

    public function contact_manage(){
    		$manage_contact=DB::table('contacts')
    			 
    	          ->get();
    	          //Mail::to('prodipsd16@gmail.com')->send(new SendMail($data));

    	return view('Admin.contact.contact',compact('manage_contact'));
    	         // return back();
    }
}
