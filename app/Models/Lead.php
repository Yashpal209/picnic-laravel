<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'phone', 'email', 'whatsapp', 'address', 'location',
        'subject', 'message', 'business_type', 'amount', 'source', 'status'
    ];
}
