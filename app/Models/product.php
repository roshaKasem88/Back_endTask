<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    
    protected $table = "products";
     
    protected  $fillable = ['name','start_date','end_date','daily_budget','total','image','created_by','updated_by'];
}
