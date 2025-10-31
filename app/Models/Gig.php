<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    /** @use HasFactory<\Database\Factories\GigFactory> */
    use HasFactory;

    protected $table = 'gigs';

    protected $fillable = ['title', 'salary'];
}
