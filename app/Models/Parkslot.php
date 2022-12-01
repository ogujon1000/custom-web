<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parkslot extends Model
{
    use HasFactory;

    protected $table = 'parkslots';
    protected $fillable = [
        'slotNumber',
        'slotName',
        'parkRate',
        'parkStatus'
    ];
}
