<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
<<<<<<< HEAD
    /** @use HasFactory<\Database\Factories\MembershipFactory> */
    use HasFactory;
=======
    use HasFactory;

    protected $fillable = ['role', 'family_id', 'user_id'];/** @use HasFactory<\Database\Factories\MembershipFactory> */
    
>>>>>>> 9061f1a0c8ab7baf09a810cb2ac614949a2d9acf
}
