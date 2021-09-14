<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Statu extends Model
{
       
        protected $table = "status";

        protected $fillable = ['name'];

        protected $dates = ['deleted_at'];



}
