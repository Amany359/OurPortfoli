<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    // (Mass Assignment)
    protected $fillable = [
        'user_id',
        'image',
        'specialization',
    ];

    /**
     *  `users` (Many-to-One)
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
