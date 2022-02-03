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
        'filePath',
        'status',
        'user_id',
        
    ];
    public function permissions()
    {
    	return $this->belongsToMany(Permission::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
