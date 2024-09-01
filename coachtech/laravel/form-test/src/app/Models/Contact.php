<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'tell',
        'address',
        'building',
        'detail',
        'content',
    ];
    static $genders = [
        '男性',
        '女性',
        'その他'
    ];
}
