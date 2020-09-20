<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Banner;
use App\Admin\Logo;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    public function index(){

    	$banner =Banner::all();
    	return view('Admin.Banner.banner',compact('banner'));
    }

    public function storebanner(Request $request){
     $data['short_description'] =$request->short_description;
     $data['long_description'] =$request->long_description;
     $data['publication_status'] =$request->publication_status;
      $image=$request->file('banner_image');
    	if ($image) {
    		$image_name=hexdec(uniqid());
	         $ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path ='image/';
			$image_url=$upload_path.$image_full_name;
			$sucess=$image->move($upload_path,$image_full_name);
			$data['banner_image']=$image_url;

			$data['banner_image']=$image_url;
			$brand=DB::table('banners')->insert($data);
			//return Redirect()->back()->with($brand);
                return back()->with('message', 'Create Successfully');

    	}
    }
    public function DeleteBanner($id){
    	$category=DB::table('banners')->where('id',$id)->delete();
        return back()->with('alert', 'Delated successfully!!');
    }

    public function EditBanner($id){
    	$banner=DB::table('banners')->where('id',$id)->first();
    	return view('admin.Banner.edit_banner',compact('banner')) ;
    }
    public function UpdateBanner(Request $request,$id){

    	$old_image =$request->old_image;
    	$data =array();
        $data['short_description']=$request->short_description;
        $data['long_description'] =$request->long_description;
        $data['publication_status'] =$request->publication_status;
    	$image =$request->file('banner_image');
    	if ($image) {
    		unlink($old_image);
    		$image_name=hexdec(uniqid());
	         $ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path ='image/';
			$image_url=$upload_path.$image_full_name;
			$sucess=$image->move($upload_path,$image_full_name);
			$data['banner_image']=$image_url;

			$data['banner_image']=$image_url;
			$banner=DB::table('banners')->where('id',$id)->update($data);
			//return Redirect()->back()->with($product);
        return back()->with('success', 'Updated Successfully!!');
            


    }
    }

    public function LogoIndex(){
        $logo=Logo::all();
        return view('Admin.Logo.logo',compact('logo'));
    }

    public function storelogo(Request $request){
         $image=$request->file('logo');
        if ($image) {
            $image_name=hexdec(uniqid());
             $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path ='image/';
            $image_url=$upload_path.$image_full_name;
            $sucess=$image->move($upload_path,$image_full_name);
            $data['logo']=$image_url;

            $data['logo']=$image_url;
            $brand=DB::table('logos')->insert($data);
            //return Redirect()->back()->with($brand);
                return back()->with('message', 'Create Successfully');

        }
    }

    public function Deletelogo($id){
        $logo=DB::table('logos')->where('id',$id)->delete();
        return back()->with('alert', 'Delated successfully!!');

    }
    public function logoEdit($id){
        $logo=DB::table('logos')->where('id',$id)->first();
        return view('admin.Logo.edit_logo',compact('logo')) ;
    }

    public function UpdateLogo(Request $request,$id){

        $old_image =$request->old_image;
        $data =array();
        $image =$request->file('logo');
        if ($image) {
            unlink($old_image);
            $image_name=hexdec(uniqid());
             $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path ='image/';
            $image_url=$upload_path.$image_full_name;
            $sucess=$image->move($upload_path,$image_full_name);
            $data['logo']=$image_url;

            $data['logo']=$image_url;
            $logo=DB::table('logos')->where('id',$id)->update($data);
            //return Redirect()->back()->with($product);
        return back()->with('success', 'Updated Successfully!!');
            


    }
    }
}
