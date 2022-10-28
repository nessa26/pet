<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class PetWebController extends Controller
{
    //create pets
    public function create()
    {
        return view ('register');
    }

    public function store(Request $r)
    {
        try {
            $r->validate([
                'name_user' => 'required|string|max:80',
                'cell_phone'=> 'required|integer|min:15',
                'pet_type'=> 'required|string|max:50',
                'pet_name' => 'required|string|max:80',
                'microchip' => 'required|integer|unique:pet|min:80',
                'age' => 'integer|min:4',
                'weight' => 'integer|min:4',
                'height' => 'integer|min:4',
                'race' => 'required|string|max:30',
                'illness' => 'required|string|max:200',
            ]);
            $pet =  Pet::create([
                'name_user' => $r->name_user ,
                'cell_phone' => $r->cell_phone,
                'pet_name' => $r->pet_name,
                'pet_type' => $r->pet_type,
                'microchip' => $r->microchip,
                'age' => $r->age,
                'weight' => $r->weight,
                'height' => $r->height,
                'race' => $r->race,
                'illness' => $r->illness,
            ]);
            $pet ->save();
            return $this->list();
        } catch (\Exception $e) {
            throw $e;
            // unique:posts
        }
    }

    //show all pets
    public function list()
    {
        $data['pets'] = Pet::all();
        return view('home',$data);
    }

    //show a pet
    public function show($id, Request $r)
    {
        $pet = Pet::find($id);
        return response()->json(['pet' => $pet]);
    }

    //update pet data
    public function update($id, Request $r)
    {
        try {
            $pet = Pet::find($id);
            $pet->update($r->all());
            $pet->save();
            return response()->json(['message' => 'the pet data has been successfully updated']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'There was an error updating pet data']);
            // return response()->json(['message'=> $e->getMessage()]);
        }
    }

    //delete pet data
    public function delete($id,Request $r)
    {
        $pet = Pet::find($id);
        $pet->delete();
        return $this->list();
    }
}
