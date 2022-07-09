<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $with = ['category' , 'user' , 'comments'];

    public function scopefilter($query, $filter)
    {
        $query->when($filter['author'] ?? false, function ($query, $author) {
            $query->whereHas('user', function ($user_query) use ($author) {
                $user_query->where('user_name', $author);
            });
        });

        $query->when($filter['search'] ?? false, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query->where('title', 'LIKE', '%' . $search . '%')
                    ->orWhere('body', 'LIKE', '%' . $search . '%');
            });
        });

        $query->when($filter['category'] ?? false, function ($category_query, $category) {
            $category_query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });
    }
    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function subscriber()
    {
        return $this->belongsToMany(User::class);
    }

    public function unSubscribe()
    {
        $this->subscriber()->detach(auth()->user()->id);
    }

    public function subscribe()
    {
        $this->subscriber()->attach(auth()->user()->id);
    }
}
