<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;

    protected $table = 'tasks'; // Ensure it matches the DB table name

    protected $fillable = ['title', 'description', 'status']; // Define mass-assignable fields
}
