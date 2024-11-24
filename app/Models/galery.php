<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class galery extends Model
{
    use HasFactory;
    protected $table = 'galerys';
    protected $fillable = ['image'];

    public function datagorden() : BelongsTo 
    {
        return $this->belongsTo(gorden::class);
    }
}
