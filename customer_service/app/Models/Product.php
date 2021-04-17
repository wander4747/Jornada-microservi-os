<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Uuid;

class Product extends Model
{
    use HasFactory;
    use Uuid;
    public $incrementing = false;
    protected $keyType = "string";

    protected $fillable = [
        "id",
        "name"
    ];
}
