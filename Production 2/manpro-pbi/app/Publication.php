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
  protected $table = 'publication';
    //restricts columns from modifying
    protected $guarded = [];

    protected $fillable =[
      'author_id',
      'title',
      'abstract',
      'slug',
      'body',
      'created_at',
      'updated_at',
      'originalFilename',
      'mime',
      'imagemime',
    ];

    // returns the instance of the user who is author of that post
    public function author()
    {
      return $this->belongsTo('App\User','author_id');
    }
}
