<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'company',
        'description',
        'imagePath',
        'filePath',
        'status',
        'user_id',
        
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}