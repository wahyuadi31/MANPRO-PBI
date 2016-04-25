<?php namespace App;
use Illuminate\Database\Eloquent\Model;
// instance of Posts class will refer to posts table in database
class Article extends Model {
  //restricts columns from modifying
  protected $guarded = [];

  // returns the instance of the user who is author of that post
  public function author()
  {
    return $this->belongsTo('App\User','author_id');
  }
}
