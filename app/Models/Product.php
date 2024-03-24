<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    protected $guarded =  [];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_producer_id');
    }

    public function qualitySeals(): BelongsToMany
    {
        // Asegúrate de que los nombres de las claves foráneas están correctos.
        // Si sigues la convención de Laravel, no necesitarías especificar las claves foráneas.
        return $this->belongsToMany(QualitySeal::class, 'product_quality_seals', 'product_id', 'quality_seal_id');
    }
}
