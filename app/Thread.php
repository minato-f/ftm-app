<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     
    protected $guarded = array('id'); 
    
    
    // protected $fillable = [
    //     'user_id', 'category_id', 'title', 'body'
    // ];
    
    
    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
    );
    
    //
    public function category()
    {
      return $this->belongsTo('App\Category');
    }
    
    public function user()
    {
      return $this->belongsTo('App\User');
    }
    
}
