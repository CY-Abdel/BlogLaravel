<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The table associated with the model.
     */
    protected $table = 'roles';

    public function users()
    {
        return $this ->belongsToMany('App\User');
    }
}
