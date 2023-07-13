<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view ('admin.testimonial.index', ['testimonials'=>$testimonials]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $testimonials = Testimonial::all();

        return view('admin.testimonial.create',['testimonials'=>$testimonials]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $testimonial = new Testimonial;
        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->description = $request->description;
        $testimonial->save();

        return redirect()->route('testimonials.index')->with('success','Student addes successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.edit', ['testimonial'=> $testimonial]);
        // return view('admin.testimonial.edit',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->description = $request->description;
        $testimonial->save();

        return redirect()->route('testimonials.index')->with('success','Testimonial updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('testimonials.index')->with('deleted','Deleted succcessfully');
    }
}
