<?php

namespace App\Http\Controllers;
use App\Models\contact_manager;
use Illuminate\Http\Request;



class ShowController extends Controller
{
    public function show(){

       $data=contact_manager::all();
       return view('show',['contact_managers'=>$data]);
    }

    public function delete($id){
        $data =  contact_manager::find($id);
        $data->delete();
        return redirect('show')-> with('success', "Suppression effectué");
     }
    public function showData($id){
        $data =  contact_manager::find($id);
        return view('edit',['data'=>$data]);
     }
    public function update(Request $req){
        $data =  contact_manager::find($req->id);
        $data -> nom = $req->nom ;
        $data -> prenom = $req->prenom ;
        $data -> telephone = $req->telephone ;
        $data -> email = $req->email ;
        $data->save();
        return redirect('show')-> with('success', "Modification effectué");
     }


}
