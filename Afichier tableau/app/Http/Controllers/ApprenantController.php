<?php

namespace App\Http\Controllers;
use App\Models\Apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    // Method to fetch all "Apprenants"
    public function index()
    {
        // Fetch all records and return them as JSON
        return response()->json(Apprenant::all());
    }
}