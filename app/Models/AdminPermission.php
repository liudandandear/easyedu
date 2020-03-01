<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 后台管理权限
 * Class AdminPermission
 * @package App\Models
 */
class AdminPermission extends Model
{
    protected $table = 'admin_permissions';

    protected $fillable = [
        'display_name', 'slug', 'description',
        'method', 'url',
    ];

    /**
     * 权限下的角色
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(
            AdminRole::class,
            'admin_role_permission_relation',
            'permission_id',
            'role_id'
        );
    }

    /**
     * @return array
     */
    public function getMethodArray()
    {
        $method = $this->getOriginal('method');

        return $method ? explode('|', $method) : [];
    }
}
