<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_detailModel extends Model
{
    use HasFactory;
    protected $table = 'order_detail';
    public $timestamps = false;
    protected $primaryKey = 'id_detail';
}
