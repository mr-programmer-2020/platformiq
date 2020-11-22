<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting; 
use App\User;
class SettingsController extends Controller
{

    public function index(){
        
        // it will work on first index -- first element and make update on him because it is only one element
        return view('settings.settings')->with('settings',Setting::first());
    }

    public function update(Request $request){
        $this->validate($request,[
            'blog_name' =>'required',
            'phone_number' =>'required',
            'blog_email' =>'required',
            'address' =>'required'
        ]);
        $setting = Setting::first(); //it will work on first element and make update on him because it is only one element

        $setting->blog_name = $request->blog_name;
        $setting->phone_number = $request->phone_number;
        $setting->blog_email = $request->blog_email;
        $setting->address = $request->address;
        $setting->save();

        return redirect()->route('settings');
    }
}