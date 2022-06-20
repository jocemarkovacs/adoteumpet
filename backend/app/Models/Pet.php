<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    //set quais campos são permitidos modificações/criações
    protected $fillable = ['nome', 'historia', 'foto'];
}
