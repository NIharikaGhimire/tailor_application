<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class PersonalDetail extends Model
{
    protected $table = 'personal_details';
    protected $primaryKey = 'id';
    protected $fillable = ['name','address','phone'];
    use HasFactory;

    public function getMeasurementDetails(): HasMany
    {

        return $this->hasMany(MeasurementDetail::class,'personaldetails_measurements');

    }
}
