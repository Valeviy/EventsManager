<?php

namespace Valeviy\EventManager\Permissions;


trait HasPermissionsTrait
{

    public function givePermissionsTo(... $permissions)
    {
        $permissions = $this->getAllPermissions($permissions);
        dd($permissions);
        if ($permissions === null) {
            return $this;
        }
        $this->permissions()->saveMany($permissions);
        return $this;
    }

    public function withdrawPermissionsTo(... $permissions)
    {
        $permissions = $this->getAllPermissions($permissions);
        $this->permissions()->detach($permissions);
        return $this;
    }

    public function refreshPermissions(... $permissions)
    {
        $this->permissions()->detach();
        return $this->givePermissionsTo($permissions);
    }

    public function hasPermissionTo($permission)
    {
        return $this->hasPermissionThroughRole($permission) || $this->hasPermission($permission);
    }

    public function hasPermissionThroughRole($permission)
    {
        foreach ($permission->roles as $role) {
            if ($this->roles->contains($role)) {
                return true;
            }
        }
        return false;
    }

    public function hasRole(... $roles)
    {
        foreach ($roles as $role) {
            if ($this->roles->contains('slug', $role)) {
                return true;
            }
        }
        return false;
    }


    public function roles()
    {
        $relatedModel = config('eventmanager.table-models.roles_model');
        return $this->belongsToMany($relatedModel, 'users_roles');

    }


    public function permissions()
    {
        $relatedModel = config('eventmanager.table-models.permissions_model');
        return $this->belongsToMany($relatedModel, 'users_permissions');

    }

    protected function hasPermission($permission)
    {
        return (bool)$this->permissions->where('slug', $permission->slug)->count();
    }

    protected function getAllPermissions(array $permissions)
    {
        $relatedModel = config('eventmanager.table-models.permissions_model');
        return $relatedModel::whereIn('slug', $permissions)->get();
    }
}