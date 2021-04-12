<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = ['name',
                            'description',];

    public function users($name){
        $role_id = Role::where('name', $name)->first()->role_id;
        return $this->hasMany(User::class)->where('role_id',$role_id)->get();
    }

    public function user(){
        return $this->hasMany(User::class);
    }
}
