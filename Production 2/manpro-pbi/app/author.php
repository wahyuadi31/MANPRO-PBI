<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    protected $table = 'authors';
    //restricts columns from modifying
    protected $guarded = [];

    protected $fillable =[
      'id',
      'name',
      'created_at',
      'updated_at'
    ];

    public function publication() {
       return $this->belongsToMany('Publication', 'publication_author', 'auth_id' , 'pub_id');
   }
}
