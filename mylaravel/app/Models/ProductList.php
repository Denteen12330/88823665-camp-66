<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ProductList extends Model
{
    //
    protected $table = 'product_list';
    protected $fillable = ['category_id', 'user_id', 'name'];
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define relationship with Category model if needed
    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
