<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class a2user extends Model
{
    //use HasFactory;
    protected $table = 'a2users';
    protected $filable = ['name','email','password','role'];

}
