<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    public function student()
    {
        return $this->hasMany(Student::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}