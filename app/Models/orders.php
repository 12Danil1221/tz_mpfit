<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;

    protected $fillable= ['FIO', 'post_title','image', 'order_quantity',	'order_status',	'comment',	'order_price'];
}