<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        return view ('admin.team.index',['teams'=> $teams]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $team = new Team;
        $team->name = $request->name;
        $team->post = $request->post;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName=time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('storage/team/'.$imageName);
            Image::make($image)->fit(1024,1024)->save($location);
            $team->image = $imageName;
            $team->save();
        }
        return redirect()->route('teams.index')->with('success','Team added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('admin.team.edit', ['team'=> $team]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        $team->name = $request->name;
        $team->post = $request->post;
        $team->save();

        return redirect()->route('teams.index')->with('success','Team updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $location = public_path('storage/');
        $image = $location . $team->image;
        if(file_exists($image)){
            @unlink($image);
        }
        $team->delete();
        return redirect()->route('teams.index')->with('success','team deleted');
    }
}
