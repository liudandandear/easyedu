<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminRole extends Model
{
    protected $table = 'admin_roles';

    protected $fillable = [
        'display_name', 'slug', 'description',
    ];

    /**
     * 角色下的管理员
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function adminUsers()
    {
        return $this->belongsToMany(
            Admin::class,
            'admin_role_relation',
            'role_id',
            'admin_users_id'
        );
    }

    /**
     * 角色下的权限
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions()
    {
        return $this->belongsToMany(
            AdminPermission::class,
            'admin_role_permission_relation',
            'role_id',
            'permission_id'
        );
    }
}
