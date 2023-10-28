<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $primaryKey = "Pid";


    public function Images()
    {
        return $this->hasMany('App\Models\ProductImages','Image_id','Image_id');
    }
}
