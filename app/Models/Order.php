<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
       
        protected $table = "orders";

        protected $fillable = ['order_name','user_id','statu_id'];

        protected $dates = ['deleted_at'];

        public function users()
        {
        return $this->belongsTo('App\User','user_id', 'id');
        }
        
        public function status()
        {
        return $this->belongsTo('App\Models\Statu','statu_id', 'id');
        }


}
