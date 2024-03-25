<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class QualitySeal extends Model
{
    use HasFactory;
    protected $guarded = []; //indicamos que campos de la tabla no se puede manipular a traves del modelo con guarded

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_quality_seals', 'quality_seal_id', 'product_id');
    }
}
