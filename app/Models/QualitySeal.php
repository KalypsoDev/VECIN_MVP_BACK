<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QualitySeal extends Model
{
    use HasFactory;
    protected $guarded = []; //indicamos que campos de la tabla no se puede manipular a traves del modelo con guarded

    public function productQualitySeal()
    {
        return $this->hasMany(ProductQualitySeal::class, 'quality_seal_id');
    }
}
