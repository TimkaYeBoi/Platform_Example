<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employee';
    protected $fillable = [
        "Passport_id",
        "Last_Name",
        'First_Name',
        'Patronymic',
        'Job_title',
        'phone_number',
        'Address',
        'company_id'
        ];

    /**
     * Get the post that owns the comment.
     */
    public function company()
    {
        return $this->belongsTo(Companies::class);
    }
}
