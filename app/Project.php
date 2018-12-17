<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'user_id'];

    public function items(){
      return $this->hasMany('App\Item');
    }
    public function deleteRelated(){
      $this->items()->delete();

      return parent::delete();
    }
    public function user(){
      return $this->belongsTo('App\User');
    }
}
