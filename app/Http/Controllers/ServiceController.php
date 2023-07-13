<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index',['services'=> $services]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $service = new Service;
        $service->type = $request->type;
        $service->price = $request->price;
        $service->description = $request->description;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName=time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('storage/'.$imageName);
            Image::make($image)->fit(1024,1024)->save($location);
            $service->image = $imageName;
            $service->save();
        }
        return redirect()->route('services.index')->with('success','service added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.service.edit', ['service'=> $service]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $service->type = $request->type;
        $service->price = $request->price;
        $service->description = $request->description;
        $service->save();
        return redirect()->route('services.index')->with('success','service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $location = public_path('storage/');
        $image = $location . $service->image;
        if(file_exists($image)){
            @unlink($image);
        }
        $service->delete();
        return redirect()->route('services.index')->with('success','service deleted');
    }
}
