<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class UserHour extends Model
// {
//     use HasFactory;
// }
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHour extends Model
{
    use HasFactory;

    protected $table = 'user_hours';

    protected $fillable = [
        'user_id',
        'hours',
        'minutes',
        'hour_price',
    ];
}
