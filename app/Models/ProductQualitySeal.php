<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductQualitySeal extends Model
{
    use HasFactory;
    protected $guarded =  [];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function qualitySeal()
    {
        return $this->belongsTo(QualitySeal::class, 'quality_seal_id');
    }
}
