<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Image extends Model
{
    protected $fillable = [
        'image_url',
        'description'
    ];

    public function report(): BelongsTo
    {
        return $this->belongsTo(Image::class, 'report_id');
    }

    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class, 'parent_image_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }
}
