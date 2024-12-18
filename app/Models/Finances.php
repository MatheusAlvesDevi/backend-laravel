<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Finances extends Model
{
    protected $table = 'finances';

    public $timestamps = false;

    protected $fillable = [
        "id",
        "value",
        "type"
    ];
}
