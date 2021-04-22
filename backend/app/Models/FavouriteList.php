<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavouriteList extends Model
{
    use HasFactory;
    
    public function favouriteListItem() 
    {
        return $this->hasMany(FavouriteListItem::class);
    }  
}
