<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    
    protected $table= "listings";
    protected $fillable = ['user_id','name','address','website',
    'email','phone','bio'];
    protected $hidden= ['created_at','updated_at'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
