<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Menu extends Model
{
    use HasFactory;
    protected $fillable=['name','image','price','description'];

    public function categories()
    {
        return $this->belongsToMany(Category::class,'category_menu');

    }
}
