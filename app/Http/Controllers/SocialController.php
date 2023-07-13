<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SocialController extends Controller
{
    public function index(){
        $socials = Social::all();
        return view('admin.social.index', compact('socials'));
    }

    public function create(){
        return view ('admin.social.create');
    }

    public function store(Request $request){
        $social = new Social;
        $social->name = $request->name;
        $social->link = $request->link;
        if($request->hasFile('icon')){
            $image = $request->file('icon');
            $imageName=time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('storage/social/'.$imageName);
            Image::make($image)->fit(1024,1024)->save($location);
            $social->icon = $imageName;
            $social->save();
        }
        return redirect()->route('socials.index')->with('success','Team added successfully');

    }

    public function edit($id){
        $social = Social::findOrFail($id);
        return view('admin.social.edit', ['social'=> $social]);
    }

    public function update(Request $request, Social $social){
        $social->name = $request->name;
        $social->link = $request->link;
        if($request->hasFile('icon')){
            $image = $request->file('icon');
            $imageName=time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('storage/social/'.$imageName);
            Image::make($image)->fit(1024,1024)->save($location);
            $social->icon = $imageName;
            $social->save();
        }
        return redirect()->route('socials.index')->with('success','Team added successfully');
    }
}
