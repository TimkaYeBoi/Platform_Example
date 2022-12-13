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
        'company_name',
        'phone_number',
        'Address',
        'employee_id'
        ];
}
