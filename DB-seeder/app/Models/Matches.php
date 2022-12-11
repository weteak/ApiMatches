<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    use HasFactory;
    protected $table='matches';
    protected $fillable=[
        'id',
        'Round',
        'Date',
        'Team 1',
        'FT',
        'Team 2'
       ];
}
