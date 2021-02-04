<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    protected $fillable = [
    'name',
    'display_name',
    'description'
      ];
      
    public function userRole()
    {
        return $this->hasMany(Role::class, 'user_id', 'id');
    }

    public function permissions()
    {
<<<<<<< HEAD
        return $this->belongsToMany('App\Permissions', 'permission_role', 'role_id', 'permissions_id');
=======
        return $this->belongsToMany(Permissions::class, 'permission_role', 'role_id', 'permission_id');
>>>>>>> 702d446... Fix Models relations
    }
}
