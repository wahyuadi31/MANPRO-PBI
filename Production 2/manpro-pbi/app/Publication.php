<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
  /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'publications';
    //restricts columns from modifying
    protected $guarded = [];

    protected $fillable =[
      'id',
      'creator_id',
      'title',
      'abstract',
      'slug',
      'imgMime',
      'created_at',
      'updated_at',
      'Filename',
      'date',
      // 'mime',
      // 'imagemime',
    ];

    // returns the instance of the user who is author of that post
    public function creator()
    {
      return $this->belongsTo('App\User','author_id');
    }

    public function authors() {
       return $this->belongsToMany('App\Author', 'publication_author', 'pub_id', 'auth_id');
   }
}
