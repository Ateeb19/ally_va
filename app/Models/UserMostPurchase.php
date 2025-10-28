<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class UserMostPurchase extends Model
// {
//     use HasFactory;
// }


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMostPurchase extends Model
{
    use HasFactory;

    protected $table = 'user_most_purchases';

    protected $fillable = [
        'user_id',
        'hours',
        'hours_price',
        'discount',
        'status',
    ];
}
