<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class gorden extends Model
{
    use HasFactory;
    protected $table = 'datagordens';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
    
    public function cards(): HasMany
    {
        return $this->hasMany(card::class, 'datagorden_id');
    }

    public function galeri(): HasMany
    {
        return $this->hasMany(galery::class, 'datagorden_id');
    }
}
