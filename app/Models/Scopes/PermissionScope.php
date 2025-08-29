<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class PermissionScope implements Scope
{
    #register as global scope in model's booted method

    /**
     * Apply the scope to a given Eloquent query builder.
     */
    protected function getTableName($model): string
    {
        return strtolower($model->getTable());
    }

    public function apply(Builder $builder, Model $model): void
    {
        $user = auth()->user();
       if(!$user) {
        throw new \Exception("Unauthenticated.You do not have permission to access this {$this->getTableName($model)}.");
       }
       $table=$this->getTableName($model);
       $permissionAll = $table . '.view';
       $permissionOwn = $table . '.view.own';
       if (!$user->canAny($permissionAll,$permissionOwn)) {
            $builder->whereRaw('1 = 0'); // Ensure no records are returned if none are owned
            return;
       }
       if($user->canAny($permissionOwn)){
            $builder->where('assigned_to', $user->assigned_to);
       }
    }
}
