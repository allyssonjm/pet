<?php

namespace App\Http\Controllers;

use App\Models\Pet\Breed;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function listBreed() {
        $breeds = Breed::all();
        return view('breed.list',['breeds' => $breeds]);
    }

    public function editBreed(Request $request, $id = null){
        $request->validate([
            'name' => 'required|max:10'
        ],[
            'name.max' => 'Este campo tem que ter no maximo 10 caracteres'
        ]);

        if($id) {
            Breed::findOrFail($id)->update($request->all());
            // $b = Breed::findOrFail($id);
            // $b->name = $request->name;
            // $b->save();
        } else {
            Breed::create($request->all());
            // $b = new Breed();
            // $b->name = $request->name;
            // $b->save();
        }
        return redirect()->route('breed.list')->with('message','Registro atualizado!');
    }

    public function showBreed($id){
        $breed = Breed::findOrFail($id);
        return view('breed.update', compact('breed'));
    }

    public function deleteBreed($id){
        $breed = Breed::find($id);
        $name = $breed->name;
        $breed->delete();
        // Breed::destroy([$id]);
        return redirect()->route('breed.list')->with('message', "A raça $name foi excluída!");
    }

}
