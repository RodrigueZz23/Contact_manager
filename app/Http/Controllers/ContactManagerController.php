<?php

namespace App\Http\Controllers;
use App\Models\contact_manager;
use Illuminate\Http\Request;


class ContactManagerController extends Controller
{
    public function contact_managerPost(Request $request)
    {
        $contact_manager = new contact_manager();

        $contact_manager->nom = $request->nom;
        $contact_manager->prenom = $request->prenom;
        $contact_manager->email = $request->email;
        $contact_manager->telephone = $request->telephone;

        $contact_manager->save();

        return back()->with('success', 'successfully');

    }


}
