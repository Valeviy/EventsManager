<?php
namespace Valeviy\EventManager\Models;

use \Illuminate\Database\Eloquent\Model;


class Permission extends Model
{
    public function roles() {
        $relatedModel = config('eventmanager.table-models.roles_model');
        return $this->belongsToMany($relatedModel,'roles_permissions');
    }
}
