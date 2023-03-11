<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userdetail extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users_detail';

    protected $fillable = [
        'avatar',
        'bio',
        'date_of_birth',
        'gender',
        'country',
        'city',
        'theme'
    ];
}
