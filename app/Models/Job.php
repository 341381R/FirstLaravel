<?php

namespace app\Models;

use \Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factories\HasFactory;
// use \Illuminate\Support\Arr;

class Job extends Model
{
    use HasFactory;

    protected $table = '_job__listings_';

    protected $fillable = ['title', 'salary'];
}