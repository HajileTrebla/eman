<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'district_id',
        'city_id',
        'department_id',
        'zip_code',
        'birth_date',
        'date_hired',
    ];

    public function city() {
        return $this->belongsTo(City::class);
    }
    public function district() {
        return $this->belongsTo(District::class);
    }
    public function department() {
        return $this->belongsTo(Department::class);
    }
}
