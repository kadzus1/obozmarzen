<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Oboz extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image_path',
        'name',
        'description',
        'personLimit',
        'price',
        'category_id'
    ];
    
    public function category() : BelongsTo
    {
        return $this->belongsTo(ObozCategory::class);
    }
}
