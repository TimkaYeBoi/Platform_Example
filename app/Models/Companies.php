<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Companies extends Model
{
    use HasFactory;
    protected $table = 'companies';
    protected $fillable = [
        "company_name",
        'director_name',
        'email',
        'address',
        'phone_number',
        'website',
        "employee_id",
        'logo'
    ];

    /**
     * Get the comments for the blog post.
     */
    public function employees()
    {
        return $this->hasMany(Employee::class,'company_id','id');
    }
}
