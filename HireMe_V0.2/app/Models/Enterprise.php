<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'email',
        'logo',
        'slogan',
        'industrie',
        'description',
    ];
    public function offer(){
        return $this->hasMany(Offer::class);
    }
}