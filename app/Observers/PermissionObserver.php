<?php

namespace App\Observers;

class PermissionObserver
{

    #untuk create, update, delete
    protected function getTableName($model): string
    {
        return strtolower($model->getTable());
    }

    public function creating($model)
    {
        $permission = $this->getTableName($model) . '.create';
        $permissionOwn = $this->getTableName($model) . '.create.own';

         if (!auth()->user()?->can($permissionAll) &&
        (!auth()->user()?->can($permissionOwn) || auth()->id() !== $model->assigned_to)) {
        throw new \Exception("You do not have permission to update this {$this->getTableName($model)}.");
        }
    }

    public function updating($model)
    {
        $permissionAll = $this->getTableName($model) . '.edit';
        $permissionOwn = $this->getTableName($model) . '.edit.own';

        if (!auth()->user()?->can($permissionAll) &&
        (!auth()->user()?->can($permissionOwn) || auth()->id() !== $model->assigned_to)) {
        throw new \Exception("You do not have permission to update this {$this->getTableName($model)}.");
        }
    }
    public function deleting(Model $model)
    {
        $permissionAny = $this->getTableName($model) . '.delete';
        $permissionOwn = $this->getTableName($model) . '.delete.own';
        if (!auth()->user()?->can($permissionAny) &&
        (!auth()->user()?->can($permissionOwn) || auth()->id() !== $model->assigned_to)) {
        throw new \Exception("You do not have permission to delete this {$this->getTableName($model)}.");
        }
    }
}
