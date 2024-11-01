<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    use HasFactory;
    public const STORAGE_DISK = 'public';
    protected $fillable = ['fullname', 'company', 'phone', 'email', 'date_of_birth', 'image'];
}
