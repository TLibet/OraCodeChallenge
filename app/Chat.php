<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
  protected $hidden = ['created_at', 'updated_at'];
  protected $appends = ['dates'];

  public static function chatFormatting($id)
  {
    return DB::findOrFail($id);
  }

  public function getDatesAttribute()
  {
    return ['created_at'=>$this->attributes['created_at'], 'updated_at'=>$this->attributes['updated_at']];
  }
}
