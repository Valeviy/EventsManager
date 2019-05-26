<?php
namespace Valeviy\EventManager\Models;

use \Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function permissions() {
        $relatedModel = config('eventmanager.table-models.permissions_model');
        return $this->belongsToMany(config($relatedModel),'roles_permissions');
    }
}

