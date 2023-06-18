<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'subtitle', 'image', 'description', 'menu', 'category_id'];

    // one to one relationship with categories
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
