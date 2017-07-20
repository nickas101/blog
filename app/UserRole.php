<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model {

    protected $table = 'user_roles';
    protected $fillable = ['name'];
    protected $guarded = ['id'];

    public function users() {
        return $this->hasMany('App\User');
    }
}
