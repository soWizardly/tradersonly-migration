<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TORefund extends Model
{
    use HasFactory;

    protected $connection = "tradersonly";
    protected $table = "refunds";
}
