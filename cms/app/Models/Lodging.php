<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lodging extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','price','user_id','category_id'];

    public function categories(): BelongsTo{
        return $this->belongsTo(Category::class);
    }

    public function users(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
