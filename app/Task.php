<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'name', 'type', 'description', 'type', 'patchnumber', 'is_patched', 'completed'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
