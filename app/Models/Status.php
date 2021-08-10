<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    
    protected $fillable = ['body','identifier'];
    
    public function user()
    {
        # code...

        return $this->belongsTo(User::class);
    }
}
