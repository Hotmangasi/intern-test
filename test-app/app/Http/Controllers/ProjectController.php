<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('project.index')->with([
            'project' => Project::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_project'=> 'required|min:10|max:40',
            'client'=> 'required|min:10|max:30',
            'project_leader'=> 'required|min:10|max:30',
            'start_date'=> 'required|min:10|max:20',
            'end_date'=> 'required|min:10|max:20',
            'progres'=> 'required|min:10|max:20',

        ]);
        $project = new Project;
        $project->nama_project = $request->nama_project;
        $project->client = $request->client;
        $project->project_leader = $request->project_leader;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->progres = $request->progres;
        $project->save();

        return to_route("project.index")->with('succes', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('project.edit')->with([
            'nama_project' => Project::fing($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
