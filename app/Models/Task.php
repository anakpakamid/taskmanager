<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Category;
use App\Models\User;
use App\Observers\PermissionObserver;
use App\Models\Scopes\PermissionScope;
class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'status',
        'category_id',
        'assigned_to',
    ];

    protected static function booted()
    {
    static::observe(PermissionObserver::class);
    static::addGlobalScope(new PermissionScope());
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function assignedUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    public function getAssignedUserNameAttribute(): string
    {
        return $this->assignedUser ? $this->assignedUser->name : 'Unassigned';
    }

    public function getCategoryNameAttribute(): string
    {
        return $this->category ? $this->category->name : 'Uncategorized';
    }

    public function scopeTable($query, $page, $limit)
    {
        $offset = ($page - 1) * $limit;

        return $query->with([
            'assignedUser',
            'category',
        ])
            ->limit($limit)
            ->offset($offset);
    }

    public function scopeSearch($query, $filters)
    {

        return $query->with([
            'assignedUser',
            'category',
        ])
            ->when($filters['title'], function ($q,$v)  {
                $q->where('title', 'like', '%' . $v . '%');
            })
            ->when($filters['status'], function ($q,$v)  {
                $q->where('status', $v);
            })
            ->when($filters['category_id'], function ($q,$v)  {
                $q->where('category_id', $v);
            })
            ->when($filters['assigned_user_id'], function ($q,$v)  {
                $q->where('assigned_to', $v);
            });
    }



}
