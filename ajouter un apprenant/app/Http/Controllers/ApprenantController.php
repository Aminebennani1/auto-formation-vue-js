<?php

namespace App\Http\Controllers;
use App\Models\Apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    public function index()
    {
        return response()->json(Apprenant::all());
    }

    // Method to store a new "Apprenant"
    public function store(Request $request)
    {
         // Validate the incoming request
         $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'statut' => 'required|string|max:255',
        ]);

        // Save the apprenant (this is an example)
        $apprenant = Apprenant::create([
            'nom' => $validated['nom'],
            'email' => $validated['email'],
            'statut' => $validated['statut'],
        ]);

        // Return a response (could include the created apprenant, or a success message)
        return response()->json($apprenant, 201);
    }
}