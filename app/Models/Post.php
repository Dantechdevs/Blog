<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;
     protected $table = 'posts';
     protected $fillable = ['id' ,'title','body'];

    public function user():BelongsTo
    {
        return $this->belongsTo(user::class)->withDefault('Admin User');
    }

    public function category():BelongsTo
    {
        return $this->belongsTo(category::class);
    }
    public function tags():BelongsToMany
    {
        return $this->belongsToMany(tag::class, 'post_tag');
    }
}
