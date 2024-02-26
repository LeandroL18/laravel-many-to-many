<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Type;
use App\Models\Technology;

class ProjectController extends Controller
{
    public function index(){

        $projects = project :: all();
        return view('pages.index', compact('projects'));
    }

    public function create(){

        $types = Type :: all();
        $technologies = Technology :: all();
        return view('pages.create', compact('types','technologies'));
    }

    public function store(Request $request){

        $data = $request -> all();
        $type = Type :: find($data['type_id']);

        $project = new Project();
        $project -> nome_autore = $data['nome_autore'];
        $project -> titolo = $data['titolo'];
        $project -> descrizione = $data['descrizione'];

        $project -> type() -> associate($type);
        $project -> save();

        $project -> technologies() -> attach($data['technology_id']);

        return redirect() -> route('index');
    }

    public function edit($id){

        $project = Project :: find($id);

        $types = Type :: all();
        $technologies = Technology :: all();
        return view('pages.edit', compact('project','types','technologies'));
    }

    public function update(Request $request, $id){

        $data = $request -> all();
        $type = Type :: find($data['type_id']);

        $project = Project :: find($id);
        $project -> nome_autore = $data['nome_autore'];
        $project -> titolo = $data['titolo'];
        $project -> descrizione = $data['descrizione'];

        $project -> type() -> associate($type);
        $project -> save();

        $project -> technologies() -> sync($data['technology_id']);

        return redirect() -> route('index');
    }
}
