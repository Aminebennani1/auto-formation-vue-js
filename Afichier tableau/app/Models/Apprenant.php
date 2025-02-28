<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    use HasFactory;

    // Specify the table name if it's not plural
    protected $table = 'apprenants'; // Adjust if necessary

    // Optional: Specify which attributes are mass assignable
    protected $fillable = ['nom', 'email', 'statut'];
}