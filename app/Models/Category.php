<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'color',
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function scopeSearch($query, $filters)
    {

        return $query
            ->when($filters['name'], function ($q,$v)  {
                $q->where('name', 'like', '%' . $v . '%');
            })
             ->when($filters['color'], function ($q,$v)  {
                $q->where('color', 'like', '%' . $v . '%');
            })
           ;
    }
}
