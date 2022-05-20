<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;


    protected $table = 'posts';

    protected $fillable = [
        'cover_image',
        'title',
        'content',
        'meta_description',
        'featured',
        'author_id',
        'category_id'
    ];

    public function id(): int
    {
        return $this->id;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id')->withDefault('Admin User');
    }

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class, 'categ');
    }

    public function tags(): BelongsToMany
    {
        return $this->BelongsToMany(Tag::class, 'post_tag');
    }

    public function comments():HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
