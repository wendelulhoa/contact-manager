<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'notes',
        'user_id',
    ];

    /**
     * Get contacts by user
     *
     * @param integer $userId = user
     * 
     * @return Illuminate\Database\Eloquent\Collection
     */
    public static function getContactsByUser(int $userId)
    {
        return Contact::where(['user_id' => $userId])->get();
    }
}
